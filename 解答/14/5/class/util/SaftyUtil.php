<?php

/**
 * 安全対策ユーティリティクラス
 */
class SaftyUtil
{
    /**
     * POSTまたはGETで送信されてきた連想配列の要素の値をサニタイズする（1次元配列のみ）
     *
     * @param array $post POSTまたはGETで取得した連想配列
     * @return array
     */
    public static function sanitize(array $post): array
    {
        foreach ($post as $k => $v) {
            $post[$k] = htmlspecialchars($v);
        }
        return $post;
    }

    /**
     * ワンタイムトークンを発生させる
     *
     * @param string $tokenName セッションに保存するトークンのキーの名前
     * @return string
     */
    public static function generateToken(string $tokenName = 'token'): string
    {
        // ワンタイムトークンを生成してセッションに保存する
        $token = bin2hex(openssl_random_pseudo_bytes(Config::RANDOM_PSEUDO_STRING_LENGTH));
        $_SESSION[$tokenName] = $token;
        return $token;
    }

    /**
     * 送信されてきたトークンが正しいかどうか調べる
     *
     * @param string $token 送信されてきたトークン
     * @param string $tokenName セッションに保存されているトークンのキーの名前
     * @return boolean
     */
    public static function isValidToken(string $token, string $tokenName = 'token') : bool
    {
        if (!isset($_SESSION[$tokenName]) || $_SESSION[$tokenName] !== $token) {
            return false;
        }
        return true;
    }
}
