<?php

namespace OmieLib\Crm\Contas;

use OmieLib\Common\OmieFail;
use OmieLib\Crm\Contas\Request\ContaListarRequest;
use OmieLib\Crm\Contas\Request\ContaVerificarRequest;
use OmieLib\Crm\Contas\Response\ContaListarResponse;
use OmieLib\Crm\Contas\Response\ContaVerificarResponse;

/**
 * Contatos da Conta
 *
 * @pw_element string $alt_data Data da Alteração
 * @pw_element string $alt_hora Hora da Alteração
 * @pw_element string $alt_user Usuário da Alteração
 * @pw_element string $inc_data Data de Inclusão
 * @pw_element string $inc_hora Hora de Inclusão
 * @pw_element string $inc_user Usuário da Inclusão
 * @pw_element string $cod_int Código de Integração com sistemas legados.
 * @pw_element string $bairro Bairro
 * @pw_element string $cargo Cargo
 * @pw_element string $ws_api Gerado da API (S/N)
 * @pw_element string $celular1 Celular 1
 * @pw_element string $celular2 Celular 2
 * @pw_element string $cep CEP
 * @pw_element string $cidade Cidade
 * @pw_element string $data Data Nascimento
 * @pw_element string $ddd_cel1 DDD Celular 1
 * @pw_element string $ddd_cel2 DDD Celular 2
 * @pw_element string $ddd_fax DDD Fax
 * @pw_element string $ddd_tel DDD Telefone
 * @pw_element string $email Email
 * @pw_element string $endereco Endereço
 * @pw_element string $endereco_c Endereço Complemento
 * @pw_element string $fax Fax
 * @pw_element integer $id ID do Contato
 * @pw_element integer $id_conta Conta
 * @pw_element integer $id_img ID da Imagem
 * @pw_element integer $id_service SFA - ID do Serviço do Portal Aeruss
 * @pw_element integer $id_telemkt Telemarketing
 * @pw_element integer $id_vend Pertence a
 * @pw_element string $img_padr Indica se é uma Imagem Default
 * @pw_element string $latlng Latitude / Longitude do Endereço
 * @pw_element string $mapaurl Endereço URL do mapa
 * @pw_element string $nome Nome
 * @pw_element string $nome_compl Nome Completo do Usuário
 * @pw_element string $observacao Observação
 * @pw_element string $pais País
 * @pw_element string $sobrenome Sobrenome
 * @pw_element string $telefone Telefone
 * @pw_element string $trial Provisionamento Trial [S/N]
 * @pw_element string $uf Estado/Província
 * @pw_element string $website WebSite
 * @pw_complex contatos
 */
class Contatos{
	/**
	 * Data da Alteração
	 *
	 * @var string
	 */
	public string $alt_data;
	/**
	 * Hora da Alteração
	 *
	 * @var string
	 */
	public string $alt_hora;
	/**
	 * Usuário da Alteração
	 *
	 * @var string
	 */
	public string $alt_user;
	/**
	 * Data de Inclusão
	 *
	 * @var string
	 */
	public string $inc_data;
	/**
	 * Hora de Inclusão
	 *
	 * @var string
	 */
	public string $inc_hora;
	/**
	 * Usuário da Inclusão
	 *
	 * @var string
	 */
	public string $inc_user;
	/**
	 * Código de Integração com sistemas legados.
	 *
	 * @var string
	 */
	public string $cod_int;
	/**
	 * Bairro
	 *
	 * @var string
	 */
	public string $bairro;
	/**
	 * Cargo
	 *
	 * @var string
	 */
	public string $cargo;
	/**
	 * Gerado da API (S/N)
	 *
	 * @var string
	 */
	public string $ws_api;
	/**
	 * Celular 1
	 *
	 * @var string
	 */
	public string $celular1;
	/**
	 * Celular 2
	 *
	 * @var string
	 */
	public string $celular2;
	/**
	 * CEP
	 *
	 * @var string
	 */
	public string $cep;
	/**
	 * Cidade
	 *
	 * @var string
	 */
	public string $cidade;
	/**
	 * Data Nascimento
	 *
	 * @var string
	 */
	public string $data;
	/**
	 * DDD Celular 1
	 *
	 * @var string
	 */
	public string $ddd_cel1;
	/**
	 * DDD Celular 2
	 *
	 * @var string
	 */
	public string $ddd_cel2;
	/**
	 * DDD Fax
	 *
	 * @var string
	 */
	public string $ddd_fax;
	/**
	 * DDD Telefone
	 *
	 * @var string
	 */
	public string $ddd_tel;
	/**
	 * Email
	 *
	 * @var string
	 */
	public string $email;
	/**
	 * Endereço
	 *
	 * @var string
	 */
	public string $endereco;
	/**
	 * Endereço Complemento
	 *
	 * @var string
	 */
	public string $endereco_c;
	/**
	 * Fax
	 *
	 * @var string
	 */
	public string $fax;
	/**
	 * ID do Contato
	 *
	 * @var integer
	 */
	public int $id;
	/**
	 * Conta
	 *
	 * @var integer
	 */
	public int $id_conta;
	/**
	 * ID da Imagem
	 *
	 * @var integer
	 */
	public int $id_img;
	/**
	 * SFA - ID do Serviço do Portal Aeruss
	 *
	 * @var integer
	 */
	public int $id_service;
	/**
	 * Telemarketing
	 *
	 * @var integer
	 */
	public int $id_telemkt;
	/**
	 * Pertence a
	 *
	 * @var integer
	 */
	public int $id_vend;
	/**
	 * Indica se é uma Imagem Default
	 *
	 * @var string
	 */
	public string $img_padr;
	/**
	 * Latitude / Longitude do Endereço
	 *
	 * @var string
	 */
	public string $latlng;
	/**
	 * Endereço URL do mapa
	 *
	 * @var string
	 */
	public string $mapaurl;
	/**
	 * Nome
	 *
	 * @var string
	 */
	public string $nome;
	/**
	 * Nome Completo do Usuário
	 *
	 * @var string
	 */
	public string $nome_compl;
	/**
	 * Observação
	 *
	 * @var string
	 */
	public string $observacao;
	/**
	 * País
	 *
	 * @var string
	 */
	public string $pais;
	/**
	 * Sobrenome
	 *
	 * @var string
	 */
	public string $sobrenome;
	/**
	 * Telefone
	 *
	 * @var string
	 */
	public string $telefone;
	/**
	 * Provisionamento Trial [S/N]
	 *
	 * @var string
	 */
	public string $trial;
	/**
	 * Estado/Província
	 *
	 * @var string
	 */
	public string $uf;
	/**
	 * WebSite
	 *
	 * @var string
	 */
	public string $website;
}
