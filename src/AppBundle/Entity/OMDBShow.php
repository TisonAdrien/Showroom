<?php

namespace AppBundle\Entity;

class OMDBShow
{
	private $Title;
	
	public function getTitle(){
		return $this->Title;
	}

	public function setTitle($value){
		$this->Title = $value;
	}
	

	private $Year;
	
	public function getYear(){
		return $this->Year;
	}

	public function setYear($value){
		$this->Year = $value;
	}
	

	private $Rated;
	
	public function getRated(){
		return $this->Rated;
	}

	public function setRated($value){
		$this->Rated = $value;
	}
	

	private $Released;
	
	public function getReleased(){
		return $this->Released;
	}

	public function setReleased($value){
		$this->Released = $value;
	}
	

	private $Runtime;
	
	public function getRuntime(){
		return $this->Runtime;
	}

	public function setRuntime($value){
		$this->Runtime = $value;
	}
	

	private $Genre;
	
	public function getGenre(){
		return $this->Genre;
	}

	public function setGenre($value){
		$this->Genre = $value;
	}
	

	private $Director;
	
	public function getDirector(){
		return $this->Director;
	}

	public function setDirector($value){
		$this->Director = $value;
	}
	

	private $Writer;
	
	public function getWriter(){
		return $this->Writer;
	}

	public function setWriter($value){
		$this->Writer = $value;
	}
	

	private $Actors;
	
	public function getActors(){
		return $this->Actors;
	}

	public function setActors($value){
		$this->Actors = $value;
	}
	

	private $Plot;
	
	public function getPlot(){
		return $this->Plot;
	}

	public function setPlot($value){
		$this->Plot = $value;
	}
	

	private $Language;
	
	public function getLanguage(){
		return $this->Language;
	}

	public function setLanguage($value){
		$this->Language = $value;
	}
	

	private $Country;
	
	public function getCountry(){
		return $this->Country;
	}

	public function setCountry($value){
		$this->Country = $value;
	}
	

	private $Awards;
	
	public function getAwards(){
		return $this->Awards;
	}

	public function setAwards($value){
		$this->Awards = $value;
	}
	

	private $Poster;
	
	public function getPoster(){
		return $this->Poster;
	}

	public function setPoster($value){
		$this->Poster = $value;
	}
	

	private $Ratings;
	
	public function getRatings(){
		return $this->Ratings;
	}

	public function setRatings($value){
		$this->Ratings = $value;
	}
	

	private $Metascore;
	
	public function getMetascore(){
		return $this->Metascore;
	}

	public function setMetascore($value){
		$this->Metascore = $value;
	}
	

	private $imdbRating;
	
	public function getimdbRating(){
		return $this->imdbRating;
	}

	public function setimdbRating($value){
		$this->imdbRating = $value;
	}
	

	private $imdbVotes;
	
	public function getimdbVotes(){
		return $this->imdbVotes;
	}

	public function setimdbVotes($value){
		$this->imdbVotes = $value;
	}
	

	private $imdbID;
	
	public function getimdbID(){
		return $this->imdbID;
	}

	public function setimdbID($value){
		$this->imdbID = $value;
	}
	

	private $Type;
	
	public function getType(){
		return $this->Type;
	}

	public function setType($value){
		$this->Type = $value;
	}
	

	private $totalSeasons;
	
	public function gettotalSeasons(){
		return $this->totalSeasons;
	}

	public function settotalSeasons($value){
		$this->totalSeasons = $value;
	}
	

	private $Response;
	
	public function getResponse(){
		return $this->Response;
	}

	public function setResponse($value){
		$this->Response = $value;
	}
}

