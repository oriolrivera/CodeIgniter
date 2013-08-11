<?php
$config=array
(
    /**
	 * Formulario
	 * este archivo siempre se tiene que nombral tal cual está.
	 *validaSelect metodo que se obtiene de MY_Form_validation.php para validar campo tipo select
	 */
	'formulario/add'
		=> array(

            array('field' => 'nom',						'label' => 'Nombre',									'rules' => 'required|is_string|trim|xss_clean'),
             	array('field' => 'tel',						'label' => 'Teléfono',									'rules' => 'numeric|trim|xss_clean'),
             	array('field' => 'correo',						'label' => 'E-Mail',									'rules' => 'required|valid_email|trim|xss_clean')
             	#array('field' => 'des',						'label' => 'Descripción',									'rules' => 'required|trim|xss_clean|max_length[12]'),
             	#array('field' => 'paises',						'label' => 'Países',									'rules' => 'required|xss_clean|validaSelect')
		),

        /**
	 * otro ejemplo
	 */
	'formulario/edit'
		=> array(

            array('field' => 'nom',						'label' => 'Nombre',									'rules' => 'required|is_string|trim|xss_clean'),
            	array('field' => 'nom',						'label' => 'Nombre',									'rules' => 'required|is_string|trim|xss_clean')
		),

);