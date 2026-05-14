<?php

namespace OmieLib\Produtos\Variacao\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Variacao\ACaracteristicas;
use OmieLib\Produtos\Variacao\AValoresCaracteristicas;
use OmieLib\Produtos\Variacao\AVariacoes;
use OmieLib\Produtos\Variacao\CaractVariacoes;
use OmieLib\Produtos\Variacao\Ident;
use OmieLib\Produtos\Variacao\ListaVariacoes;
use OmieLib\Produtos\Variacao\ProdutosVariacoesJsonClient;
use OmieLib\Produtos\Variacao\Response\VariacaoConsultarResponse;
use OmieLib\Produtos\Variacao\Response\VariacaoIncluirResponse;
use OmieLib\Produtos\Variacao\Response\VariacaoListarResponse;
use OmieLib\Produtos\Variacao\Variacoes;

/**
 * Solicitação da consulta de variação.
 *
 * @pw_element integer $nCodProd Código do produto.<BR>É o ID do produto e será utilizado apenas nas APIs como chave principal para localizar um produto.<BR><BR>Quando um produto for incluído via API, você receberá um ID para esse novo produto.<BR>Recomendamos que você guarde essa informação no aplicativo que estiver integrando.<BR><BR>Utilize a tag "codigo_produto" do método "ListarProdutos" da API<BR>/api/v1/geral/produtos/<BR>para obter essa informação.<BR>
 * @pw_element string $cCodIntProd Código de integração do produto.<BR>Preenchimento Opcional.<BR><BR>Esse campo deve ser informado apenas se você incluiu o produto via API e informou um código de integração para o produto. Do contrário, informe sempre a tag "nCodProd".
 * @pw_complex variacaoConsultarRequest
 */
class VariacaoConsultarRequest{
	/**
	 * Código do produto.<BR>É o ID do produto e será utilizado apenas nas APIs como chave principal para localizar um produto.<BR><BR>Quando um produto for incluído via API, você receberá um ID para esse novo produto.<BR>Recomendamos que você guarde essa informação no aplicativo que estiver integrando.<BR><BR>Utilize a tag "codigo_produto" do método "ListarProdutos" da API<BR>/api/v1/geral/produtos/<BR>para obter essa informação.<BR>
	 *
	 * @var integer
	 */
	public int $nCodProd;
	/**
	 * Código de integração do produto.<BR>Preenchimento Opcional.<BR><BR>Esse campo deve ser informado apenas se você incluiu o produto via API e informou um código de integração para o produto. Do contrário, informe sempre a tag "nCodProd".
	 *
	 * @var string
	 */
	public string $cCodIntProd;
}
