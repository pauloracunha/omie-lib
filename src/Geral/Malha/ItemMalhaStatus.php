<?php

namespace OmieLib\Geral\Malha;

use OmieLib\Common\OmieFail;
use OmieLib\Geral\Malha\Request\MalhaAlterarRequest;
use OmieLib\Geral\Malha\Request\MalhaConsultarRequest;
use OmieLib\Geral\Malha\Request\MalhaExcluirRequest;
use OmieLib\Geral\Malha\Request\MalhaIncluirRequest;
use OmieLib\Geral\Malha\Request\MalhaPesquisarRequest;
use OmieLib\Geral\Malha\Response\MalhaAlterarResponse;
use OmieLib\Geral\Malha\Response\MalhaConsultarResponse;
use OmieLib\Geral\Malha\Response\MalhaExcluirResponse;
use OmieLib\Geral\Malha\Response\MalhaIncluirResponse;
use OmieLib\Geral\Malha\Response\MalhaPesquisarResponse;

/**
 * Status do item da estrutura do produto.
 *
 * @pw_element integer $idProdMalha Código interno de identificação do produto filho da estrutura.<BR>
 * @pw_element string $intProdMalha Código de integração do produto filho da estrutura.
 * @pw_element integer $idMalha Id da Malha.
 * @pw_element string $intMalha Código de Integração da Malha.
 * @pw_element string $codStatus Código do status
 * @pw_element string $descrStatus Descrição do Status
 * @pw_complex itemMalhaStatus
 */
class ItemMalhaStatus{
	/**
	 * Código interno de identificação do produto filho da estrutura.<BR>
	 *
	 * @var integer
	 */
	public int $idProdMalha;
	/**
	 * Código de integração do produto filho da estrutura.
	 *
	 * @var string
	 */
	public string $intProdMalha;
	/**
	 * Id da Malha.
	 *
	 * @var integer
	 */
	public int $idMalha;
	/**
	 * Código de Integração da Malha.
	 *
	 * @var string
	 */
	public string $intMalha;
	/**
	 * Código do status
	 *
	 * @var string
	 */
	public string $codStatus;
	/**
	 * Descrição do Status
	 *
	 * @var string
	 */
	public string $descrStatus;
}
