<?php

namespace Codeforces\Api;

use \GuzzleHttp\Client as Guzzle;

class Client implements ClientInterface
{
    protected $client;

    public function __construct()
    {
        $this->client = new Guzzle(
            ['base_url' => 'http://codeforces.com/api/']
        );
    }

    /**
     * @param int $contestId
     */
    public function contestHacks($contestId)
    {
        return $this->client->get('contest.hacks', [
            'query' => ['contestId' => $contestId],
        ])->json();
    }

    /**
     * @param boolean $gym
     */
    public function contestList($gym = false)
    {
        return $this->client->get('contest.list', [
            'query' => ['gym' => $gym],
        ])->json();
    }

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
    public function contestStandings($contestId, $param = array())
    {
        return $this->client->get('contest.standings', [
            'query' => array_merge(['contestId' => $contestId], $param),
        ])->json();
    }

    /**
     * $param = [
     *   'handle' => '',
     *   'from'   => '',
     *   'count'  => '',
     * ]
     * @param int $contestId
     * @param array $param
     */
    public function contestStatus($contestId, $param = array())
    {
        return $this->client->get('contest.status', [
            'query' => array_merge(['contestId' => $contestId], $param),
        ])->json();
    }

    /** 
     * @param string|array $tag
     */
    public function problemsetProblems($tag = null)
    {
        return $this->client->get('problemset.problems', [
            'query' => ['tags' => implode(';', (array)$tag)],
        ])->json();
    }

    /**
     * @param int $count
     */
    public function problemsetRecentStatus($count)
    {
        return $this->client->get('problemset.recentStatus', [
            'query' => ['count' => $count],
        ])->json();
    }

    /**
     * @param string|array $handle
     */
    public function userInfo($handle = null)
    {
        return $this->client->get('user.info', [
            'query' => ['handles' => implode(';', (array)$handle)],
        ])->json();
    }

    /**
     * @param boolean $activeOnly
     */
    public function userRatedList($activeOnly = false)
    {
        return $this->client->get('user.ratedList', [
            'query' => ['activeOnly' => $activeOnly],
        ])->json();
    }

    /**
     * @param string $handle
     */
    public function userRating($handle)
    {
        return $this->client->get('user.rating', [
            'query' => ['handle' => $handle],
        ])->json();
    }

    /**
     * $param = [
     *   'from'   => '',
     *   'count'  => '',
     * ]
     * @param string $handle
     * @param array $param
     */
    public function userStatus($handle, $param = array())
    {
        return $this->client->get('user.rating', [
            'query' => array_merge(['handle' => $handle], $param),
        ])->json();
    }
}
