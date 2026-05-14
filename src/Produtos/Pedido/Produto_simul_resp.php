<?php

namespace OmieLib\Produtos\Pedido;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Pedido\Request\PvpAlterarPedFatRequest;
use OmieLib\Produtos\Pedido\Request\PvpConsultarRequest;
use OmieLib\Produtos\Pedido\Request\PvpDevolverRequest;
use OmieLib\Produtos\Pedido\Request\PvpExcluirRequest;
use OmieLib\Produtos\Pedido\Request\PvpListarRequest;
use OmieLib\Produtos\Pedido\Request\PvpSimularImpRequest;
use OmieLib\Produtos\Pedido\Request\PvpStatusRequest;
use OmieLib\Produtos\Pedido\Request\PvpTrocarEtapaRequest;
use OmieLib\Produtos\Pedido\Response\PvpAlterarPedFatResponse;
use OmieLib\Produtos\Pedido\Response\PvpConsultarResponse;
use OmieLib\Produtos\Pedido\Response\PvpDevolverResponse;
use OmieLib\Produtos\Pedido\Response\PvpExcluirResponse;
use OmieLib\Produtos\Pedido\Response\PvpListarResponse;
use OmieLib\Produtos\Pedido\Response\PvpSimularImpResponse;
use OmieLib\Produtos\Pedido\Response\PvpStatusResponse;
use OmieLib\Produtos\Pedido\Response\PvpTrocarEtapaResponse;

/**
 * Informações do produto para simulação de impostos
 *
 * @pw_element integer $codigo_produto ID do Produto.<BR>Preenchimento Obrigatório.<BR><BR>Esse campo não é exibido na tela do Pedido de Vendas. <BR>É uma informação interna, utilizada apenas nas APIs.<BR><BR>Utilize a tag "codigo_produto" do método "ListarProdutos" da API<BR>http://app.omie.com.br/api/v1/geral/produtos/<BR>para obter essa informação.<BR><BR>
 * @pw_element string $codigo_produto_integracao Código de integração do Produto.<BR>Preenchimento Opcional.<BR><BR>Esse campo deve ser informado apenas se você incluiu o produto via API e informou um código de integração para o produto. Do contrário, informe sempre a tag "codigo_produto".<BR>
 * @pw_element integer $codigo_item_integracao Código de Integração do Item do Pedido de Venda.<BR><BR>Código informado em "codigo_item_integracao" ou vazio se o produto for componente de um kit. <BR><BR>Presente se a tag "codigo_item_integracao" for informada.
 * @pw_element integer $codigo_item_kit ID do Item do kit (pai) que o componente pertence.<BR><BR>Presente se a tag "codigo_item_integracao" for informada.
 * @pw_element decimal $quantidade Quantidade<BR>Preenchimento obrigatório.<BR><BR>No método de devolução de pedido:<BR>Preenchimento é opcional<BR>Caso não seja preenchida será feita a devolução integral do produto.
 * @pw_element decimal $valor_unitario Valor Únitário<BR>Preenchimento Obrigatório.
 * @pw_element decimal $valor_desconto Valor do Desconto<BR>Preenchimento Opcional
 * @pw_element decimal $valor_icms_desonerado Valor do ICMS desonerado
 * @pw_element string $motivo_icms_desonerado Código do Motivo de desoneração do ICMS<BR><BR>Códigos válidos para desoneração do ICMS<BR>01 Táxi<BR>03 Produtor Agropecuário<BR>04 Frotista/Locadora<BR>05 Diplomático/Consular<BR>06 Utilitários e Motocicletas da Amazônia Ocidental e Áreas de Livre Comércio (Resolução 714/88 e 790/94 ? CONTRAN e suas alterações)<BR>07 SUFRAMA<BR>08 Venda a Órgão Público<BR>09 Outros. (NT 2011/004)<BR>10 Deficiente Condutor (Convênio ICMS 38/12)<BR>11 Deficiente Não Condutor (Convênio ICMS 38/12)<BR>16 Olimpíadas Rio 2016<BR>90 Solicitado pelo Fisco<BR>
 * @pw_element decimal $valor_total Valor Total.<BR>Preenchimento Opcional
 * @pw_element string $cfop CFOP - Código Fiscal de Operações e Prestações.<BR>Preenchimento Opcional.<BR><BR>Utilize a tag "nCodigo" do método "ListarCFOP" da API<BR>http://app.omie.com.br/api/v1/produtos/cfop/<BR>para obter essa informação.
 * @pw_complex produto_simul_resp
 */
class Produto_simul_resp{
	/**
	 * ID do Produto.<BR>Preenchimento Obrigatório.<BR><BR>Esse campo não é exibido na tela do Pedido de Vendas. <BR>É uma informação interna, utilizada apenas nas APIs.<BR><BR>Utilize a tag "codigo_produto" do método "ListarProdutos" da API<BR>http://app.omie.com.br/api/v1/geral/produtos/<BR>para obter essa informação.<BR><BR>
	 *
	 * @var integer
	 */
	public int $codigo_produto;
	/**
	 * Código de integração do Produto.<BR>Preenchimento Opcional.<BR><BR>Esse campo deve ser informado apenas se você incluiu o produto via API e informou um código de integração para o produto. Do contrário, informe sempre a tag "codigo_produto".<BR>
	 *
	 * @var string
	 */
	public string $codigo_produto_integracao;
	/**
	 * Código de Integração do Item do Pedido de Venda.<BR><BR>Código informado em "codigo_item_integracao" ou vazio se o produto for componente de um kit. <BR><BR>Presente se a tag "codigo_item_integracao" for informada.
	 *
	 * @var integer
	 */
	public int $codigo_item_integracao;
	/**
	 * ID do Item do kit (pai) que o componente pertence.<BR><BR>Presente se a tag "codigo_item_integracao" for informada.
	 *
	 * @var integer
	 */
	public int $codigo_item_kit;
	/**
	 * Quantidade<BR>Preenchimento obrigatório.<BR><BR>No método de devolução de pedido:<BR>Preenchimento é opcional<BR>Caso não seja preenchida será feita a devolução integral do produto.
	 *
	 * @var decimal
	 */
	public float $quantidade;
	/**
	 * Valor Únitário<BR>Preenchimento Obrigatório.
	 *
	 * @var decimal
	 */
	public float $valor_unitario;
	/**
	 * Valor do Desconto<BR>Preenchimento Opcional
	 *
	 * @var decimal
	 */
	public float $valor_desconto;
	/**
	 * Valor do ICMS desonerado
	 *
	 * @var decimal
	 */
	public float $valor_icms_desonerado;
	/**
	 * Código do Motivo de desoneração do ICMS<BR><BR>Códigos válidos para desoneração do ICMS<BR>01 Táxi<BR>03 Produtor Agropecuário<BR>04 Frotista/Locadora<BR>05 Diplomático/Consular<BR>06 Utilitários e Motocicletas da Amazônia Ocidental e Áreas de Livre Comércio (Resolução 714/88 e 790/94 ? CONTRAN e suas alterações)<BR>07 SUFRAMA<BR>08 Venda a Órgão Público<BR>09 Outros. (NT 2011/004)<BR>10 Deficiente Condutor (Convênio ICMS 38/12)<BR>11 Deficiente Não Condutor (Convênio ICMS 38/12)<BR>16 Olimpíadas Rio 2016<BR>90 Solicitado pelo Fisco<BR>
	 *
	 * @var string
	 */
	public string $motivo_icms_desonerado;
	/**
	 * Valor Total.<BR>Preenchimento Opcional
	 *
	 * @var decimal
	 */
	public float $valor_total;
	/**
	 * CFOP - Código Fiscal de Operações e Prestações.<BR>Preenchimento Opcional.<BR><BR>Utilize a tag "nCodigo" do método "ListarCFOP" da API<BR>http://app.omie.com.br/api/v1/produtos/cfop/<BR>para obter essa informação.
	 *
	 * @var string
	 */
	public string $cfop;
}
