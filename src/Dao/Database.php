<?php
namespace DAO;
class Database
{

   /**
   * Instance of PDO class
   *
   * @var SPDO
   * @access protected
   * @static
   */
  protected static $db = null;

  /**
   * Constant: user name for connexion
   *
   * @var string
   */
  const DEFAULT_SQL_USER = 'root';

  /**
   * Constant: hôte of database
   *
   * @var string
   */
  const DEFAULT_SQL_HOST = 'localhost';

  /**
   * Constant: pass of database
   *
   * @var string
   */
  const DEFAULT_SQL_PASS = '';

  /**
   * Constant: database name
   *
   * @var string
   */
  const DEFAULT_SQL_DTB = 'invoicing';

  /**
   * Constructor
   *
   * @param void
   * @return void
   * @see PDO::__construct()
   * @access public
   */
  public function __construct()
  {
	if(is_null(self::$db))
    {
	  $this->db = new PDO('mysql:dbname='.self::DEFAULT_SQL_DTB.';host='.self::DEFAULT_SQL_HOST,self::DEFAULT_SQL_USER ,self::DEFAULT_SQL_PASS);
    }
   
  }

   /**
    * Make and return instance of object
    *
    * @access public
    * @static
    * @param void
    * @return pdo $instance
    */
  public static function getPDO()
  {
     return $this->db;
  }

  
}
