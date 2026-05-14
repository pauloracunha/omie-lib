<?php

namespace OmieLib\Geral\Malha\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Geral\Malha\CustoProducao;
use OmieLib\Geral\Malha\Ident;
use OmieLib\Geral\Malha\ItemMalhaAlterar;
use OmieLib\Geral\Malha\ItemMalhaIncluir;
use OmieLib\Geral\Malha\ItemMalhaStatus;
use OmieLib\Geral\Malha\Itens;
use OmieLib\Geral\Malha\Observacoes;
use OmieLib\Geral\Malha\ProdutosEncontrados;
use OmieLib\Geral\Malha\ProdutosEstruturaJsonClient;
use OmieLib\Geral\Malha\Request\MalhaAlterarRequest;
use OmieLib\Geral\Malha\Request\MalhaConsultarRequest;
use OmieLib\Geral\Malha\Request\MalhaExcluirRequest;
use OmieLib\Geral\Malha\Request\MalhaIncluirRequest;
use OmieLib\Geral\Malha\Request\MalhaPesquisarRequest;

/**
 * Exclusão de um item da estrutura do produto.
 *
 * @pw_element integer $idProduto Código interno de identificação do produto.<BR>(Interno, utilizado apenas na integração via API, não é exibido na tela).<BR>O conteúdo desse campo é o código interno do produto gerado pelo Omie.<BR>
 * @pw_element string $intProduto Código de integração do produto.<BR>(Interno, utilizado apenas na Integração via API, não aparece na tela).<BR>Utilize esse campo para informar o código utilizado no seu aplicativo quando incluir um produto no Omie. <BR>Assim, poderá utilizá-lo para resgatar as informações do produto desejado.<BR>Caso informe esse campo, não informe a tag nCodProd. Caso isso aconteça, o conteúdo dessa tag será desconsiderada.
 * @pw_element integer $idMalha Id da Malha.
 * @pw_element string $intMalha Código de Integração da Malha.
 * @pw_element string $codStatus Código do status
 * @pw_element string $descrStatus Descrição do Status
 * @pw_complex malhaExcluirResponse
 */
class MalhaExcluirResponse{
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
