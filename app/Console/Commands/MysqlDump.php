<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class MysqlDump extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:mysqlDump';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '数据库备份';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
// 备份数据库
        $T_Host = env('DB_HOST');
        $user = env('DB_USERNAME'); //数据库账号
        $password = env('DB_PASSWORD'); //数据库密码
        $dbname = env('DB_DATABASE'); //数据库名称
// 这里的账号、密码、名称都是从页面传过来的
        $link = mysqli_connect($T_Host, $user, $password, $dbname);
        if (!$link) // 连接mysql数据库
        {
            echo '数据库连接失败，请核对后再试';
            exit;
        }
        if (!mysqli_select_db($link, $dbname)) // 是否存在该数据库
        {
            echo '不存在数据库:' . $dbname . ',请核对后再试';
            exit;
        }
        mysqli_query($link, "set names 'utf8'");
        $mysql = "set charset utf8;\r\n";
        $q1 = mysqli_query($link, "show tables");
        while ($t = mysqli_fetch_array($q1)) {
            $table = $t[0];
            $q2 = mysqli_query($link, "show create table `$table`");
            $sql = mysqli_fetch_array($q2);
            $mysql .= $sql['Create Table'] . ";\r\n";
            $q3 = mysqli_query($link, "select * from `$table`");
            while ($data = mysqli_fetch_assoc($q3)) {
                $keys = array_keys($data);
                $keys = array_map('addslashes', $keys);
                $keys = join('`,`', $keys);
                $keys = "`" . $keys . "`";
                $vals = array_values($data);
                $vals = array_map('addslashes', $vals);
                $vals = join("','", $vals);
                $vals = "'" . $vals . "'";
                $mysql .= "insert into `$table`($keys) values($vals);\r\n";
            }
        }
        $file = 'mysqldump';
        if (!Storage::exists($file)) {
            Storage::makeDirectory($file);
        }
        Storage::append($file . '/' . date('Y-m-d') . '.sql', $mysql);
    }
}
