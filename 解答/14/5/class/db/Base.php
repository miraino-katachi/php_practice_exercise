<?php

/**
 * データベース操作基底クラス
 */
class Base
{
    /** @var object PDOクラスインスタンス */
    protected $dbh;

    /**
     * コンストラクタ
     */
    public function __construct()
    {
        // データベースに接続するための文字列（DSN 接続文字列）
        $dsn = 'mysql:dbname=' . Config::DB_NAME . ';host=' . Config::DB_HOST . ';charset=utf8';

        // PDOクラスのインスタンス
        $this->dbh = new PDO($dsn, Config::DB_USER, Config::DB_PASS);

        // エラーが起きたときのモードを指定する
        // 「PDO::ERRMODE_EXCEPTION」を指定すると、エラー発生時に例外がスローされる
        $this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    /**
     * トランザクションを開始する
     *
     * @return void
     */
    public function begin()
    {
        $this->dbh->beginTransaction();
    }

    /**
     * トランザクションをコミットする
     *
     * @return void
     */
    public function commit()
    {
        $this->dbh->commit();
    }

    /**
     * トランザクションをロールバックする
     *
     * @return void
     */
    public function rollback()
    {
        $this->dbh->rollback();
    }
}
