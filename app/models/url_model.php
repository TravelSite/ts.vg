<?
// model for URL references
class url_model extends CI_Model {

	// declare variables here

    function __construct(){
        // Call the Model constructor
        parent::__construct();
    }

	// gets link by ID
	function link_by_id($id = 0){
		$query = $this->db->get_where('short_urls', array('id' => $id), 1);
		
		return $query->row();
    }

	// inserts link log when clicked
	function create_log($data){
		return $this->db->insert('short_urls_log', $data);
    }
}

?>