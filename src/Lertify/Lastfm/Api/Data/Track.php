<?php
namespace Lertify\Lastfm\Api\Data;

class Track
{
	/**
	 * @var string
	 */
	private $name;

	/**
	 * @var int (seconds)
	 */
	private $duration;

	/**
	 * @var string
	 */
	private $mbId;

	/**
	 * @var string
	 */
	private $url;

	/**
	 * @var bool
	 */
	private $streamable = false;

	/**
	 * @var bool
	 */
	private $streamableFulltrack = false;

	/**
	 * @var int
	 */
	private $rank;

	/**
	 * @var string
	 */
	private $artistName;

	/**
	 * @var string
	 */
	private $artistMbId;

	/**
	 * @var string
	 */
	private $artistUrl;

	/**
	 * @var ArrayCollection
	 */
	private $images;

	/**
	 * @var int
	 */
	private $playcount;

	/**
	 * @var int
	 */
	private $listeners;

	/**
	 * @param string $name
	 */
	public function setName( $name )
	{
		$this->name = $name;
	}

	/**
	 * @return string
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * @param int $duration
	 */
	public function setDuration( $duration )
	{
		$this->duration = $duration;
	}

	/**
	 * @return int
	 */
	public function getDuration()
	{
		return $this->duration;
	}

	/**
	 * @param string $mbId
	 */
	public function setMbId( $mbId )
	{
		$this->mbId = $mbId;
	}

	/**
	 * @return string
	 */
	public function getMbId()
	{
		return $this->mbId;
	}

	/**
	 * @param string $url
	 */
	public function setUrl( $url )
	{
		$this->url = $url;
	}

	/**
	 * @return string
	 */
	public function getUrl()
	{
		return $this->url;
	}

	/**
	 * @param boolean $streamable
	 */
	public function setStreamable( $streamable )
	{
		$this->streamable = $streamable;
	}

	/**
	 * @return boolean
	 */
	public function getStreamable()
	{
		return $this->streamable;
	}

	/**
	 * @param boolean $streamableFulltrack
	 */
	public function setStreamableFulltrack( $streamableFulltrack )
	{
		$this->streamableFulltrack = $streamableFulltrack;
	}

	/**
	 * @return boolean
	 */
	public function getStreamableFulltrack()
	{
		return $this->streamableFulltrack;
	}

	/**
	 * @param int $rank
	 */
	public function setRank( $rank )
	{
		$this->rank = $rank;
	}

	/**
	 * @return int
	 */
	public function getRank()
	{
		return $this->rank;
	}

	/**
	 * @param string $artistName
	 */
	public function setArtistName( $artistName )
	{
		$this->artistName = $artistName;
	}

	/**
	 * @return string
	 */
	public function getArtistName()
	{
		return $this->artistName;
	}

	/**
	 * @param string $artistMbId
	 */
	public function setArtistMbId( $artistMbId )
	{
		$this->artistMbId = $artistMbId;
	}

	/**
	 * @return string
	 */
	public function getArtistMbId()
	{
		return $this->artistMbId;
	}

	/**
	 * @param string $artistUrl
	 */
	public function setArtistUrl( $artistUrl )
	{
		$this->artistUrl = $artistUrl;
	}

	/**
	 * @return string
	 */
	public function getArtistUrl()
	{
		return $this->artistUrl;
	}

	/**
	 * @param ArrayCollection $Images
	 */
	public function setImages( ArrayCollection $Images )
	{
		$this->images = $Images;
	}

	/**
	 * @return ArrayCollection
	 */
	public function getImages()
	{
		return $this->images;
	}

	/**
	 * @param int $playcount
	 */
	public function setPlaycount( $playcount )
	{
		$this->playcount = $playcount;
	}

	/**
	 * @return int
	 */
	public function getPlaycount()
	{
		return $this->playcount;
	}

	/**
	 * @param int $listeners
	 */
	public function setListeners( $listeners )
	{
		$this->listeners = $listeners;
	}

	/**
	 * @return int
	 */
	public function getListeners()
	{
		return $this->listeners;
	}
}
