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
 * Itens da estrutura de produto.
 *
 * @pw_element integer $idMalha Id da Malha.
 * @pw_element string $intMalha Código de Integração da Malha.
 * @pw_element integer $idProdMalha Código interno de identificação do produto filho da estrutura.<BR>
 * @pw_element string $intProdMalha Código de integração do produto filho da estrutura.
 * @pw_element string $codProdMalha Código do produto.<BR><BR>Conforme é exibido na tela do cadastro do produto.<BR>
 * @pw_element string $descrProdMalha Descrição do produto.
 * @pw_element decimal $quantProdMalha Quantidade do item da estrutura do produto.
 * @pw_element string $unidProdMalha Unidade do produto.
 * @pw_element string $tipoProdMalha Tipo do Produto.
 * @pw_element integer $idFamMalha Id da Familia.
 * @pw_element string $codFamMalha Código da Familia.
 * @pw_element string $descrFamMalha Descrição da Familia.
 * @pw_element decimal $pesoLiqProdMalha Peso Líquido do produto em Kg.
 * @pw_element decimal $pesoBrutoProdMalha Peso Bruto do Produto em Kg.
 * @pw_element decimal $percPerdaProdMalha Percentual de perda
 * @pw_element string $obsProdMalha Observações do item da estrutura do produto.
 * @pw_element string $dIncProdMalha Data de Inclusão do item da estrutura do produto.
 * @pw_element string $hIncProdMalha Hora de Inclusão do item da estrutura do produto.
 * @pw_element string $uIncProdMalha Usuário da Inclusão do item da estrutura do produto.
 * @pw_element string $dAltProdMalha Data de Alteração do item da estrutura do produto.
 * @pw_element string $hAltProdMalha Hora de Alteração do item da estrutura do produto.
 * @pw_element string $uAltProdMalha Usuário da Alteração do item da estrutura do produto.
 * @pw_complex itens
 */
class Itens{
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
	 * Código do produto.<BR><BR>Conforme é exibido na tela do cadastro do produto.<BR>
	 *
	 * @var string
	 */
	public string $codProdMalha;
	/**
	 * Descrição do produto.
	 *
	 * @var string
	 */
	public string $descrProdMalha;
	/**
	 * Quantidade do item da estrutura do produto.
	 *
	 * @var decimal
	 */
	public float $quantProdMalha;
	/**
	 * Unidade do produto.
	 *
	 * @var string
	 */
	public string $unidProdMalha;
	/**
	 * Tipo do Produto.
	 *
	 * @var string
	 */
	public string $tipoProdMalha;
	/**
	 * Id da Familia.
	 *
	 * @var integer
	 */
	public int $idFamMalha;
	/**
	 * Código da Familia.
	 *
	 * @var string
	 */
	public string $codFamMalha;
	/**
	 * Descrição da Familia.
	 *
	 * @var string
	 */
	public string $descrFamMalha;
	/**
	 * Peso Líquido do produto em Kg.
	 *
	 * @var decimal
	 */
	public float $pesoLiqProdMalha;
	/**
	 * Peso Bruto do Produto em Kg.
	 *
	 * @var decimal
	 */
	public float $pesoBrutoProdMalha;
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
	 * Data de Inclusão do item da estrutura do produto.
	 *
	 * @var string
	 */
	public string $dIncProdMalha;
	/**
	 * Hora de Inclusão do item da estrutura do produto.
	 *
	 * @var string
	 */
	public string $hIncProdMalha;
	/**
	 * Usuário da Inclusão do item da estrutura do produto.
	 *
	 * @var string
	 */
	public string $uIncProdMalha;
	/**
	 * Data de Alteração do item da estrutura do produto.
	 *
	 * @var string
	 */
	public string $dAltProdMalha;
	/**
	 * Hora de Alteração do item da estrutura do produto.
	 *
	 * @var string
	 */
	public string $hAltProdMalha;
	/**
	 * Usuário da Alteração do item da estrutura do produto.
	 *
	 * @var string
	 */
	public string $uAltProdMalha;
}
