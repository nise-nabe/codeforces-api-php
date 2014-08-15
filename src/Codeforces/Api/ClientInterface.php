<?php

namespace Codeforces\Api;

interface ClientInterface
{
    /**
     * @param int $contestId
     */
    public function contestHacks($contestId);

    /**
     * @param boolean $gym
     */
    public function contestList($gym = false);

    /**
     * $param = [
     *   'from'           => '',
     *   'count'          => '',
     *   'handles'        => '',
     *   'room'           => '',
     *   'showUnofficial' => '',
     * ]
     * @param int $contestId
     * @param array $param
     */
    public function contestStandings($contestId, $param = array());

    /**
     * $param = [
     *   'handle' => '',
     *   'from'   => '',
     *   'count'  => '',
     * ]
     * @param int $contestId
     * @param array $param
     */
    public function contestStatus($contestId, $param = array());

    /** 
     * @param string|array $tag
     */
    public function problemsetProblems($tag = null);

    /**
     * @param int $count
     */
    public function problemsetRecentStatus($count);

    /**
     * @param string|array $handle
     */
    public function userInfo($handle = null);

    /**
     * @param boolean $activeOnly
     */
    public function userRatedList($activeOnly = false);

    /**
     * @param string $handle
     */
    public function userRating($handle);

    /**
     * $param = [
     *   'from'   => '',
     *   'count'  => '',
     * ]
     * @param string $handle
     * @param array $param
     */
    public function userStatus($handle, $param = array());
}
