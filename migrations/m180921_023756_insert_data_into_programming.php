<?php

use yii\db\Migration;

/**
 * Handles the data insertion for table `{{%programming}}`.
 */
class m180921_023756_insert_data_into_programming extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->batchInsert('{{%programming}}', ['id','name'], [
			['1','Java'],
			['2','JavaScript'],
			['3','Visual Basic'],
			['4','Python'],
			['5','C or C++'],
			['6','C#'],
			['7','Objective-C'],
			['8','Perl'],
			['9','Ruby'],
			['10','PHP'],
			['11','R'],
			['12','Bash'],
			['13','Scala'],
			['14','ASP'],
			['15','Assembly'],
			['16','JSP'],
			['17','Swift'],
			['18','Matlab'],
			['19','Crystal'],
			['20','Typescript'],
			['21','Cobol'],
			['22','VBA'],
			['23','Groovy'],
			['24','Ada'],
			['25','Golang'],
			['26','Tcl'],
			['27','Python'],
			['28','Kotlin'],
			['29','avk'],
			['30','Fortran'],
			['31','Clojure'],
			['32','Delphi'],
			['33','Erlang'],
			['34','Scheme'],
			['35','Haskell'],
			['36','Lua'],
			['37','F#'],
			['38','Dart'],
			['39','Rust'],
			['40','Lisp'],
			['41','Smalltalk'],
			['42','Prolog'],
			['43','Pascal'],
			['44','PostScript']
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->truncateTable('{{%programming}}');
    }
}
