<?php

class Person_with_disabilities extends My_FormsController
{
	protected $view_file = 'pwdform';
	protected $preview_form_file = 'pwd_view';
	protected $header = 'Request for Persons With Disabilities Form';
	protected $table = 'pwd_registry';
	protected $form_id = 8;

	//validation
	protected $rules = [
		'pwd_number' => 'required|trim|integer',
		'causes_of_disability' => 'required',
		'type_disability' => 'required|trim',
		'employment_status' => 'required|trim',
		//government
		'id_ref_no' => 'required|trim|integer',
		// 'sss_no' => 'required|trim|integer',
		// 'gsis_no' => 'required|trim|integer',
		// 'pag_ibig_no' => 'required|trim|integer',
		'philhealth_status' => 'required|trim',
		// 'philhealth_no' => 'required|trim|integer',
		//*****

		'blood_type' => 'required|trim',
		'affilated_org' => 'required|trim',
		'contact_person' => 'required|trim',
		'office_address' => 'required|trim',
		'office_telephone_no' => 'required|trim',
		// 'accomplished_by' => 'required|trim',
		'name_of_reporting_unit' => 'required|trim',
		'registration_no' => 'required|trim|integer'
		//family composition
		// 'guardians_name' => 'required|trim'

		// 'telephone_no' => 'required|trim',
		// 'cellphone_no' => 'required|trim|integer',
		// 'dateofbirth' => 'required|trim',
		// 'home_address' => 'required|trim',
		// 'email_address' => 'required|trim',
		// 'occupation' => 'required|trim',
		
	];

	protected $fillable = [

		'nature_of_employment',
		'type_of_employment'

	];

	public function __construct() {

		parent::__construct();
	}

	public function store() {

		if($this->run_rules()){
			$governmentFields = ['id_ref_no', 'philhealth_status'];
			// $familyFields = ['guardians_name'];
			$rqData = [
				'resident_id' => $this->user_id,
				'forms_id' => $this->form_id,
				'request_status' => 'pending'
			];

			$data = elements(array_diff(array_keys($this->rules), $governmentFields), $this->input->post());
			$governmentData = elements($governmentFields, $this->input->post()) + ['resident_id' => $this->user_id ];	
			// $familyData = elements($familyFields, $this->input->post()) + ['user_id' => $this->user_id ];	
		
			// unset($data[''], $data['philhealth_no'] );

			$this->resident->government_update( $this->user_id, $governmentData);
			// $this->resident->family_insert($familyData);

			$id = $this->resident->insert($this->table, $rqData, $data);
			
			$this->json_response(['result' => true, 'data' => $id]);


		}else{
			$this->json_error_array();
		}
	}
	
}