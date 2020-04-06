<?php

/**
 * ユーザーテーブルクラス
 */
class Users extends Base
{
    /**
     * コンストラクタ
     */
    public function __construct()
    {
        // 親クラスのコンストラクタの呼び出し
        parent::__construct();
    }

    /**
     * 新規ユーザー追加
     *
     * @param string $email
     * @param string $password
     * @param string $name
     * @return bool
     */
    public function addUser(string $email, string $password, string $name): bool
    {
        // 同じメールアドレスのユーザーがいないか調べる
        if (!empty($this->findUserByEmail($email))) {
            // 同じメールアドレスのユーザーが存在したらfalseを返却
            return false;
        }

        // パスワードをハッシュ化する
        $password = password_hash($password, PASSWORD_DEFAULT);

        // レコードをインサートする
        $sql = 'insert into users (email, password, name)';
        $sql .= ' values ';
        $sql .= '(:email, :password, :name)';

        $stmt = $this->dbh->prepare($sql);
        $stmt->bindValue(':email', $email, PDO::PARAM_STR);
        $stmt->bindValue(':password', $password, PDO::PARAM_STR);
        $stmt->bindValue(':name', $name, PDO::PARAM_STR);
        $stmt->execute();

        // 処理が終了したらtrueを返却
        return true;
    }

    /**
     * 同一のメールアドレスのユーザーを探す
     *
     * @param string $email
     * @return array ユーザーの連想配列
     */
    private function findUserByEmail(string $email): array
    {
        $sql = 'select * from users where email=:email';
        // $sql = "select * from users where email='$email'";
        $stmt = $this->dbh->prepare($sql);
        $stmt->bindValue(':email', $email, PDO::PARAM_STR);
        $stmt->execute();
        $rec = $stmt->fetch(PDO::FETCH_ASSOC);

        // falseが返却されたときは、空の配列を返却ß
        if (empty($rec)) {
            return [];
        }
        return $rec;
    }
}
