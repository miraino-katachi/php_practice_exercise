<?php

/**
 * todo_itemテーブルクラス
 */
class TodoItems extends Base
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
     * レコードを全件取得する（期限日の古いものから並び替える）
     *
     * @return array
     */
    public function selectAll()
    {
        $sql = 'select * from todo_items order by expiration_date';

        // SQL文を実行する準備
        $stmt = $this->dbh->prepare($sql);

        // SQLを実行する
        $stmt->execute();

        // 取得したレコードを連想配列として返却する
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * レコードをアップデートする
     *
     * @param int $id
     * @param string $expirationDate
     * @param string $todoItem
     * @param int $isCompleted
     * @return void
     */
    public function update(int $id, string $expirationDate, string $todoItem, int $isCompleted)
    {
        // レコードをアップデートするSQL文
        $sql = 'update todo_items set expiration_date=:expiration_date, todo_item=:todo_item, is_completed=:is_completed ';
        $sql .= 'where id=:id';

        // SQL文を実行する準備
        $stmt = $this->dbh->prepare($sql);

        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->bindValue(':expiration_date', $expirationDate, PDO::PARAM_STR);
        $stmt->bindValue(':todo_item', $todoItem, PDO::PARAM_STR);
        $stmt->bindValue(':is_completed', $isCompleted, PDO::PARAM_INT);

        // SQLを実行する
        $stmt->execute();
    }

    /**
     * 指定IDのレコードを完了フラグを切り替える
     *
     * @param int $id
     * @param bool $isCompleted
     * @return void
     */
    public function updateIsCompletedByID(int $id, bool $isCompleted)
    {
        // レコードをアップデートするSQL文
        $sql = 'update todo_items set is_completed=:isCompleted ';
        $sql .= 'where id=:id';

        // SQL文を実行する準備
        $stmt = $this->dbh->prepare($sql);

        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->bindValue(':isCompleted', (int) $isCompleted, PDO::PARAM_INT);

        // SQLを実行する
        $stmt->execute();
    }

    /**
     * 指定IDのレコードを削除する
     *
     * @param integer $id
     * @return void
     */
    public function delete(int $id)
    {
        $sql = 'delete from todo_items where id=:id';

        // SQL文を実行する準備
        $stmt = $this->dbh->prepare($sql);

        // SQL文の該当箇所に、変数の値を割り当て（バインド）する
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);

        // SQLを実行する
        $stmt->execute();
    }

    /**
     * 新規レコードをインサートする
     *
     * @param string $expirationDate
     * @param string $todoItem
     * @param integer $isCompleted
     * @return void
     */
    public function insert(string $expirationDate, string $todoItem, int $isCompleted = 0)
    {
        $sql = 'insert into todo_items (';
        $sql .= 'expiration_date,';
        $sql .= 'todo_item,';
        $sql .= 'is_completed';
        $sql .= ') values (';
        $sql .= ':expiration_date,';
        $sql .= ':todo_item,';
        $sql .= ':is_completed';
        $sql .= ')';

        // SQL文を実行する準備
        $stmt = $this->dbh->prepare($sql);

        // SQL文の該当箇所に、変数の値を割り当て（バインド）する
        $stmt->bindValue(':expiration_date', $expirationDate, PDO::PARAM_STR);
        $stmt->bindValue(':todo_item', $todoItem, PDO::PARAM_STR);
        $stmt->bindValue(':is_completed', $isCompleted, PDO::PARAM_INT);

        // SQLを実行する
        $stmt->execute();
    }
}
