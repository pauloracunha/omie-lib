<?php

namespace OmieLib\Produtos\Variacao;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Variacao\Request\VariacaoConsultarRequest;
use OmieLib\Produtos\Variacao\Request\VariacaoIncluirRequest;
use OmieLib\Produtos\Variacao\Request\VariacaoListarRequest;
use OmieLib\Produtos\Variacao\Response\VariacaoConsultarResponse;
use OmieLib\Produtos\Variacao\Response\VariacaoIncluirResponse;
use OmieLib\Produtos\Variacao\Response\VariacaoListarResponse;

/**
 * Identificação do produto.
 *
 * @pw_element integer $nCodProd Código do produto.<BR>É o ID do produto e será utilizado apenas nas APIs como chave principal para localizar um produto.<BR><BR>Quando um produto for incluído via API, você receberá um ID para esse novo produto.<BR>Recomendamos que você guarde essa informação no aplicativo que estiver integrando.<BR><BR>Utilize a tag "codigo_produto" do método "ListarProdutos" da API<BR>/api/v1/geral/produtos/<BR>para obter essa informação.<BR>
 * @pw_element string $cCodIntProd Código de integração do produto.<BR>Preenchimento Opcional.<BR><BR>Esse campo deve ser informado apenas se você incluiu o produto via API e informou um código de integração para o produto. Do contrário, informe sempre a tag "nCodProd".
 * @pw_element string $cCodProduto Código do Produto exibido na tela de Produtos.<BR>Preenchimento Opcional.
 * @pw_element string $cDescrProduto Descrição do produto.<BR>Descrição do nome do produto no Omie.
 * @pw_complex ident
 */
class Ident{
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
	/**
	 * Código do Produto exibido na tela de Produtos.<BR>Preenchimento Opcional.
	 *
	 * @var string
	 */
	public string $cCodProduto;
	/**
	 * Descrição do produto.<BR>Descrição do nome do produto no Omie.
	 *
	 * @var string
	 */
	public string $cDescrProduto;
}
