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
 * Identificação do produto.
 *
 * @pw_element integer $idProduto Código interno de identificação do produto.<BR>(Interno, utilizado apenas na integração via API, não é exibido na tela).<BR>O conteúdo desse campo é o código interno do produto gerado pelo Omie.<BR>
 * @pw_element string $intProduto Código de integração do produto.<BR>(Interno, utilizado apenas na Integração via API, não aparece na tela).<BR>Utilize esse campo para informar o código utilizado no seu aplicativo quando incluir um produto no Omie. <BR>Assim, poderá utilizá-lo para resgatar as informações do produto desejado.<BR>Caso informe esse campo, não informe a tag nCodProd. Caso isso aconteça, o conteúdo dessa tag será desconsiderada.
 * @pw_element string $codProduto Código do produto.<BR><BR>Conforme é exibido na tela do cadastro do produto.<BR>
 * @pw_element string $descrProduto Descrição do produto.
 * @pw_element string $tipoProduto Tipo do Produto.
 * @pw_element integer $idFamilia Id da Familia.
 * @pw_element string $codFamilia Código da Familia.
 * @pw_element string $descrFamilia Descrição da Familia.
 * @pw_element string $unidProduto Unidade do produto.
 * @pw_element decimal $pesoLiqProduto Peso Líquido do produto em Kg.
 * @pw_element decimal $pesoBrutoProduto Peso Bruto do Produto em Kg.
 * @pw_complex ident
 */
class Ident{
	/**
	 * Código interno de identificação do produto.<BR>(Interno, utilizado apenas na integração via API, não é exibido na tela).<BR>O conteúdo desse campo é o código interno do produto gerado pelo Omie.<BR>
	 *
	 * @var integer
	 */
	public int $idProduto;
	/**
	 * Código de integração do produto.<BR>(Interno, utilizado apenas na Integração via API, não aparece na tela).<BR>Utilize esse campo para informar o código utilizado no seu aplicativo quando incluir um produto no Omie. <BR>Assim, poderá utilizá-lo para resgatar as informações do produto desejado.<BR>Caso informe esse campo, não informe a tag nCodProd. Caso isso aconteça, o conteúdo dessa tag será desconsiderada.
	 *
	 * @var string
	 */
	public string $intProduto;
	/**
	 * Código do produto.<BR><BR>Conforme é exibido na tela do cadastro do produto.<BR>
	 *
	 * @var string
	 */
	public string $codProduto;
	/**
	 * Descrição do produto.
	 *
	 * @var string
	 */
	public string $descrProduto;
	/**
	 * Tipo do Produto.
	 *
	 * @var string
	 */
	public string $tipoProduto;
	/**
	 * Id da Familia.
	 *
	 * @var integer
	 */
	public int $idFamilia;
	/**
	 * Código da Familia.
	 *
	 * @var string
	 */
	public string $codFamilia;
	/**
	 * Descrição da Familia.
	 *
	 * @var string
	 */
	public string $descrFamilia;
	/**
	 * Unidade do produto.
	 *
	 * @var string
	 */
	public string $unidProduto;
	/**
	 * Peso Líquido do produto em Kg.
	 *
	 * @var decimal
	 */
	public float $pesoLiqProduto;
	/**
	 * Peso Bruto do Produto em Kg.
	 *
	 * @var decimal
	 */
	public float $pesoBrutoProduto;
}
