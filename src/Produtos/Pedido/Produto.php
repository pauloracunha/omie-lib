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
 * Identificação do Produto do Item do Pedido de Vendas.
 *
 * @pw_element integer $codigo_produto ID do Produto.<BR>Preenchimento Obrigatório.<BR><BR>Esse campo não é exibido na tela do Pedido de Vendas. <BR>É uma informação interna, utilizada apenas nas APIs.<BR><BR>Utilize a tag "codigo_produto" do método "ListarProdutos" da API<BR>http://app.omie.com.br/api/v1/geral/produtos/<BR>para obter essa informação.<BR><BR>
 * @pw_element string $codigo_produto_integracao Código de integração do Produto.<BR>Preenchimento Opcional.<BR><BR>Esse campo deve ser informado apenas se você incluiu o produto via API e informou um código de integração para o produto. Do contrário, informe sempre a tag "codigo_produto".<BR>
 * @pw_element string $codigo Código do Produto exibido na tela do Pedido de Vendas.<BR>Preenchimento Opcional.
 * @pw_element string $descricao Descrição do Produto.<BR>Preenchimento Opcional.
 * @pw_element string $cfop CFOP - Código Fiscal de Operações e Prestações.<BR>Preenchimento Opcional.<BR><BR>Utilize a tag "nCodigo" do método "ListarCFOP" da API<BR>http://app.omie.com.br/api/v1/produtos/cfop/<BR>para obter essa informação.
 * @pw_element string $ncm NCM - Nomenclatura Comum do Mercosul<BR>Preenchimento Opcional.<BR><BR>Utilize a tag "cCodigo" do método "ListarNCM" da API<BR>http://app.omie.com.br/api/v1/produtos/ncm/<BR>para obter essa informação.
 * @pw_element string $ean EAN - European Article Number<BR>Preenchimento Opcional.
 * @pw_element string $unidade Unidade.<BR>Preenchimento Opcional.<BR><BR>Utilize a tag "codigo" do método "ListarUnidades" da API<BR>http://app.omie.com.br/api/v1/geral/unidade/<BR>para obter essa informação.<BR>
 * @pw_element decimal $quantidade Quantidade<BR>Preenchimento obrigatório.<BR><BR>No método de devolução de pedido:<BR>Preenchimento é opcional<BR>Caso não seja preenchida será feita a devolução integral do produto.
 * @pw_element decimal $valor_unitario Valor Únitário<BR>Preenchimento Obrigatório.
 * @pw_element integer $codigo_tabela_preco Código da tabela de preço.<BR><BR>(Interno, utilizado apenas na integração via API, não é exibido na tela).<BR>Deve ser informada opcionalmente, caso a tabela de preços esteja configurada no Omie.
 * @pw_element decimal $valor_mercadoria Valor da Mercadoria<BR>Preenchimento Opcional
 * @pw_element string $tipo_desconto Tipo de Desconto.<BR>Preenchimento Opcional
 * @pw_element decimal $percentual_desconto Percentual de Desconto.<BR>Preenchimento Opcional
 * @pw_element decimal $valor_desconto Valor do Desconto<BR>Preenchimento Opcional
 * @pw_element decimal $valor_deducao Valor da Dedução<BR>Preenchimento Opcional
 * @pw_element decimal $valor_icms_desonerado Valor do ICMS desonerado
 * @pw_element string $motivo_icms_desonerado Código do Motivo de desoneração do ICMS<BR><BR>Códigos válidos para desoneração do ICMS<BR>01 Táxi<BR>03 Produtor Agropecuário<BR>04 Frotista/Locadora<BR>05 Diplomático/Consular<BR>06 Utilitários e Motocicletas da Amazônia Ocidental e Áreas de Livre Comércio (Resolução 714/88 e 790/94 ? CONTRAN e suas alterações)<BR>07 SUFRAMA<BR>08 Venda a Órgão Público<BR>09 Outros. (NT 2011/004)<BR>10 Deficiente Condutor (Convênio ICMS 38/12)<BR>11 Deficiente Não Condutor (Convênio ICMS 38/12)<BR>16 Olimpíadas Rio 2016<BR>90 Solicitado pelo Fisco<BR>
 * @pw_element decimal $valor_total Valor Total.<BR>Preenchimento Opcional
 * @pw_element string $indicador_escala Indicador de Produção em Escala Relevante.<BR><BR>Pode ser:<BR>"S" para Produzido em Escala Relevante.<BR>"N" para Produzido em Escala NÃO Relevante.
 * @pw_element string $cnpj_fabricante CNPJ do Fabricante da Mercadoria.
 * @pw_element string $kit Indica se o produto é um kit
 * @pw_element string $componente_kit Indica se o produto é um componente de um kit
 * @pw_element integer $codigo_item_kit ID do Item do kit (pai) que o componente pertence
 * @pw_element string $reservado (S/N) Indica se o estoque do produto será reservado.
 * @pw_complex produto
 */
class Produto{
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
	 * Código do Produto exibido na tela do Pedido de Vendas.<BR>Preenchimento Opcional.
	 *
	 * @var string
	 */
	public string $codigo;
	/**
	 * Descrição do Produto.<BR>Preenchimento Opcional.
	 *
	 * @var string
	 */
	public string $descricao;
	/**
	 * CFOP - Código Fiscal de Operações e Prestações.<BR>Preenchimento Opcional.<BR><BR>Utilize a tag "nCodigo" do método "ListarCFOP" da API<BR>http://app.omie.com.br/api/v1/produtos/cfop/<BR>para obter essa informação.
	 *
	 * @var string
	 */
	public string $cfop;
	/**
	 * NCM - Nomenclatura Comum do Mercosul<BR>Preenchimento Opcional.<BR><BR>Utilize a tag "cCodigo" do método "ListarNCM" da API<BR>http://app.omie.com.br/api/v1/produtos/ncm/<BR>para obter essa informação.
	 *
	 * @var string
	 */
	public string $ncm;
	/**
	 * EAN - European Article Number<BR>Preenchimento Opcional.
	 *
	 * @var string
	 */
	public string $ean;
	/**
	 * Unidade.<BR>Preenchimento Opcional.<BR><BR>Utilize a tag "codigo" do método "ListarUnidades" da API<BR>http://app.omie.com.br/api/v1/geral/unidade/<BR>para obter essa informação.<BR>
	 *
	 * @var string
	 */
	public string $unidade;
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
	 * Código da tabela de preço.<BR><BR>(Interno, utilizado apenas na integração via API, não é exibido na tela).<BR>Deve ser informada opcionalmente, caso a tabela de preços esteja configurada no Omie.
	 *
	 * @var integer
	 */
	public int $codigo_tabela_preco;
	/**
	 * Valor da Mercadoria<BR>Preenchimento Opcional
	 *
	 * @var decimal
	 */
	public float $valor_mercadoria;
	/**
	 * Tipo de Desconto.<BR>Preenchimento Opcional
	 *
	 * @var string
	 */
	public string $tipo_desconto;
	/**
	 * Percentual de Desconto.<BR>Preenchimento Opcional
	 *
	 * @var decimal
	 */
	public float $percentual_desconto;
	/**
	 * Valor do Desconto<BR>Preenchimento Opcional
	 *
	 * @var decimal
	 */
	public float $valor_desconto;
	/**
	 * Valor da Dedução<BR>Preenchimento Opcional
	 *
	 * @var decimal
	 */
	public float $valor_deducao;
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
	 * Indicador de Produção em Escala Relevante.<BR><BR>Pode ser:<BR>"S" para Produzido em Escala Relevante.<BR>"N" para Produzido em Escala NÃO Relevante.
	 *
	 * @var string
	 */
	public string $indicador_escala;
	/**
	 * CNPJ do Fabricante da Mercadoria.
	 *
	 * @var string
	 */
	public string $cnpj_fabricante;
	/**
	 * Indica se o produto é um kit
	 *
	 * @var string
	 */
	public string $kit;
	/**
	 * Indica se o produto é um componente de um kit
	 *
	 * @var string
	 */
	public string $componente_kit;
	/**
	 * ID do Item do kit (pai) que o componente pertence
	 *
	 * @var integer
	 */
	public int $codigo_item_kit;
	/**
	 * (S/N) Indica se o estoque do produto será reservado.
	 *
	 * @var string
	 */
	public string $reservado;
}
