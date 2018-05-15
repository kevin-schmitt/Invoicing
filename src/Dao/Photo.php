<?php
namespace DAO;

class Photo extends Database
{
   /**
    * insert photo in database
    *
    * @access public
    * @param pathPhoto
    * @return boolean error
    */
  public function insert(String $pathPhoto) : boolean
  {
	try
	{
	    $sql = "INSERT INTO logo(path_photo) VALUES(:pathPhoto)";
		$req = self::db->prepare($sql);
		$b->bindParam(":pathPhoto", $pathPhoto);
		$req->execute();
		return true;
	}
	catch(Exeption e)
	{
		return false;
	}
  }

  /**
   * return path of photo
   *
   * @return string path of photo
   */
  public function getPhoto($query) : string 
  {
    try
	{
	    $sql = "SELECT * FROM photo";
		$statement = self::db->prepare($sql);
		$statement->execute();
		$row = $statement->fetch();
		return $row['path_photo'];
	}
	catch(Exeption $e)
	{
		return $e;
	}
  }
}
