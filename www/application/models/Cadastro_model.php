<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Cadastro_model
 *
 * @author Divino
 */
class Cadastro_model extends CI_Model {
    
    public  $id_lead;
    public  $nome;
    public  $sobrenome;
    public  $email;
    public  $tipo;
    public  $data_hora;
    public  $ip;
    private $table_name = 'lead';
    
    public function find_all() {
        $result = $this->db->select('*')
                ->from($this->table_name)
                ->order_by('id_lead','DESC')
                ->get();
        return $result->result();
    }
    
     public function find() {
        $result = $this->db->select('*')
                ->from($this->table_name)
                ->where('id_lead', $this->id_lead)
                ->get();
        return $result->row();
    }
    
    public function create() {
        $this->db->insert($this->table_name, $this);
        $new_id = $this->db->insert_id();
        return $new_id;
    }
    
    public function update() {
        $data = array
        (
            'nome'       => $this->nome,
            'sobrenome'       => $this->sobrenome,
             'email'       => $this->email,
            'tipo'       => $this->tipo,
             'data_hora'       => $this->data_hora,
            'ip'       => $this->ip
        );
        
        return $this->db->where('id_lead', $this->id_lead)
                        ->update($this->table_name, $data);
    }
     public function delete() {
        return $this->db->delete($this->table_name, array('id_lead' => $this->id_lead));
     }
}
