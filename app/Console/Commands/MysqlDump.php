<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Schema;

class MysqlDump extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:mysqldump';

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
        $tables = DB::select('show tables');
        $mysql = '';
        foreach ($tables as $value) {
            $table = DB::select('show create table `' . $value->Tables_in_mall . '`');
            foreach ($table[0] as $key => $v) {
                if ($key == 'Create Table') {
                    $mysql .= $table[0]->$key . ";\r\n";
                }
            }
            $file = Schema::getColumnListing($value->Tables_in_mall);
            //dump($file);
            $data = DB::table($value->Tables_in_mall)->select($file)->get();
            $file = join(',', $file);
            foreach ($data as $key => $va) {
                $vals = get_object_vars($va);
                $vals = array_values($vals);
                $vals = array_map('addslashes', $vals);
                $vals = join("','", $vals);
                $vals = "'" . $vals . "'";
                $mysql .= "INSERT INTO `$value->Tables_in_mall` ($file) VALUES ($vals) ;\r\n ";
            }
        }
        $file = 'mysqldump';
        if (!Storage::exists($file)) {
            Storage::makeDirectory($file);
        }
        $pat = 'mysqldump/' . date('Y-m-d') . $_SERVER['REQUEST_TIME'] . rand(100000, 900000) . '.sql';
        Storage::append($pat, $mysql);
        $this->info('mysql dump success name:' . $pat);
    }
}
