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
 * Item da estrutura do produto.
 *
 * @pw_element string $intMalha Código de Integração da Malha.
 * @pw_element integer $idProdMalha Código interno de identificação do produto filho da estrutura.<BR>
 * @pw_element string $intProdMalha Código de integração do produto filho da estrutura.
 * @pw_element decimal $quantProdMalha Quantidade do item da estrutura do produto.
 * @pw_element decimal $percPerdaProdMalha Percentual de perda
 * @pw_element string $obsProdMalha Observações do item da estrutura do produto.
 * @pw_element integer $codigo_local_estoque Código do Local do Estoque.<BR>Preenchimento opcional.
 * @pw_complex itemMalhaIncluir
 */
class ItemMalhaIncluir{
	/**
	 * Código de Integração da Malha.
	 *
	 * @var string
	 */
	public string $intMalha;
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
	 * Quantidade do item da estrutura do produto.
	 *
	 * @var decimal
	 */
	public float $quantProdMalha;
	/**
	 * Percentual de perda
	 *
	 * @var decimal
	 */
	public float $percPerdaProdMalha;
	/**
	 * Observações do item da estrutura do produto.
	 *
	 * @var string
	 */
	public string $obsProdMalha;
	/**
	 * Código do Local do Estoque.<BR>Preenchimento opcional.
	 *
	 * @var integer
	 */
	public int $codigo_local_estoque;
}
