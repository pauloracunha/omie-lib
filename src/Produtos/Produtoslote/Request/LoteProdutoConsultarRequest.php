<?php

namespace OmieLib\Produtos\Produtoslote\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Produtoslote\Ident;
use OmieLib\Produtos\Produtoslote\ListaLotes;
use OmieLib\Produtos\Produtoslote\Lotes;
use OmieLib\Produtos\Produtoslote\ProdutosLoteJsonClient;
use OmieLib\Produtos\Produtoslote\Response\LoteProdutoConsultarResponse;
use OmieLib\Produtos\Produtoslote\Response\LoteProdutoListarResponse;

/**
 * Solicitação da consulta de lote.
 *
 * @pw_element integer $nCodProd Código do produto.<BR>É o ID do produto e será utilizado apenas nas APIs como chave principal para localizar um produto.<BR><BR>Quando um produto for incluído via API, você receberá um ID para esse novo produto.<BR>Recomendamos que você guarde essa informação no aplicativo que estiver integrando.<BR><BR>Utilize a tag "codigo_produto" do método "ListarProdutos" da API<BR>/api/v1/geral/produtos/<BR>para obter essa informação.
 * @pw_element string $cCodIntProd Código de integração do produto.<BR>Preenchimento Opcional.<BR><BR>Esse campo deve ser informado apenas se você incluiu o produto via API e informou um código de integração para o produto. Do contrário, informe sempre a tag "nCodProd".
 * @pw_element integer $nIdLocal Código interno de identificação do local(Estoque).
 * @pw_complex loteProdutoConsultarRequest
 */
class LoteProdutoConsultarRequest{
	/**
	 * Código do produto.<BR>É o ID do produto e será utilizado apenas nas APIs como chave principal para localizar um produto.<BR><BR>Quando um produto for incluído via API, você receberá um ID para esse novo produto.<BR>Recomendamos que você guarde essa informação no aplicativo que estiver integrando.<BR><BR>Utilize a tag "codigo_produto" do método "ListarProdutos" da API<BR>/api/v1/geral/produtos/<BR>para obter essa informação.
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
	/**
	 * Código interno de identificação do local(Estoque).
	 *
	 * @var integer
	 */
	public int $nIdLocal;
}
