<?php
/**
 * Created by PhpStorm.
 * User: dnaphas
 * Date: 6/11/14
 * Time: 6:39 PM
 */



namespace Marriage;

use Courter\Courter;

/**
 * Class Marriage Represents assignment between two sets or among members of a set, two members per assignment, as
 * in marriage.
 * @package Marriage
 */
class Marriage{

	/**
	 * @var array A group of members who seek to marry, either each other or members of $girls. $boys and
	 * $girls are disjoint.
	 */
	private $boys;

	/**
	 * @var array Another group of members who seek to marry, either each other or members of $boys. $boys
	 * and $girls are disjoint.
	 */
	private $girls;

	/**
	 * @return array
	 */
	public function getBoys()
	{
		return $this->boys;
	}

	/**
	 * @return array
	 */
	public function getGirls()
	{
		return $this->girls;
	}

	public function __construct( $boys = array(), $girls = array() ){

	}

	/**
	 * Marry two groups of heterosexuals.
	 * @param int $suitors 1 if $boys propose to $girls, 2 if $girls propose to $boys.
	 */
	public function straightMarry( $suitors = 1 ){
		/*
		 * This is the stable marriage problem.
		 */

	}

	/**
	 * Marry two groups, each of which may or may not contain bisexuals or homosexuals.
	 * @param int $suitors
	 */
	public function biMarry( $suitors = 1 ){
		/*
		 * This is the stable roommates problem (http://en.wikipedia.org/wiki/Stable_roommates_problem).
		 * What to do about cases with no stable assignment?
		 * 	Option 1: Kick out low rankers until a stable assignment is possible among those who remain.
		 * We should still find out if boys or girls ask first.
		 */
	}

	/**
	 * @return bool
	 */
	public function checkStability(){

	}

	/**
	 * return bool
	 */
	public function checkOptimality(){

	}

/*
 * How do we avoid non-terminating games in biMarry?
 */

}



