<?php

namespace OmieLib\Produtos\Recebimentonfe;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Recebimentonfe\Request\RcbtoAlterarEtapaRequest;
use OmieLib\Produtos\Recebimentonfe\Request\RcbtoAlterarRequest;
use OmieLib\Produtos\Recebimentonfe\Request\RcbtoConcAlterarRequest;
use OmieLib\Produtos\Recebimentonfe\Request\RcbtoConcluirRequest;
use OmieLib\Produtos\Recebimentonfe\Request\RcbtoConsultarRequest;
use OmieLib\Produtos\Recebimentonfe\Request\RcbtoExcluirRequest;
use OmieLib\Produtos\Recebimentonfe\Request\RcbtoListarRequest;
use OmieLib\Produtos\Recebimentonfe\Request\RcbtoReverterRequest;
use OmieLib\Produtos\Recebimentonfe\Response\RcbtoAlterarEtapaResponse;
use OmieLib\Produtos\Recebimentonfe\Response\RcbtoAlterarResponse;
use OmieLib\Produtos\Recebimentonfe\Response\RcbtoConcAlterarResponse;
use OmieLib\Produtos\Recebimentonfe\Response\RcbtoConcluirResponse;
use OmieLib\Produtos\Recebimentonfe\Response\RcbtoConsultarResponse;
use OmieLib\Produtos\Recebimentonfe\Response\RcbtoExcluirResponse;
use OmieLib\Produtos\Recebimentonfe\Response\RcbtoListarResponse;
use OmieLib\Produtos\Recebimentonfe\Response\RcbtoReverterResponse;

/**
 * Cabeçalho do item da NFe de recebimento
 *
 * @pw_element integer $nIdItem Id do item da NFe de recebimento.<BR><BR>Preenchimento automático.
 * @pw_element integer $nIdPedido ID do Pedido de Compra
 * @pw_element integer $nIdItPedido ID do Item do Pedido
 * @pw_element integer $nIdProduto Id do produto. <BR><BR>Preenchimento obrigatório.<BR><BR>Esse campo não é exibido na tela de itens do recebimento da NFe. É uma informação interna, utilizada apenas nas APIs.<BR><BR>Utilize a tag "codigo_produto" do método "ListarProdutos" da API<BR>/api/v1/geral/produtos/ para obter essa informação.
 * @pw_element integer $nSequencia Número sequencial do item da NFe de recebimento
 * @pw_element string $cCodigoProduto Código do Produto na NFe exibido na tela de recebimento
 * @pw_element string $cDescricaoProduto Descrição do produto
 * @pw_element string $cIgnorarItem Ignorar a importação do item da NFe de recebimento <BR><BR>Pode ser: <BR>S = Sim <BR>N = Não
 * @pw_element string $cAdicionarNovo Cadastrar como novo produto o item da NFe de recebimento <BR><BR>Pode ser: <BR>S = Sim <BR>N = Não
 * @pw_element string $cAssociarExistente Associar a um produto ou pedido existente o item da NFe de recebimento <BR><BR>Pode ser: <BR>S = Sim <BR>N = Não
 * @pw_element string $cItemDevolvido Item da NFe de recebimento devolvido<BR><BR>Pode ser: <BR>S = Sim <BR>N = Não
 * @pw_element string $cNCM NCM - Nomenclatura Comum do Mercosul<BR><BR>Utilize a tag "cCodigo" do método "ListarNCM" da API<BR>/api/v1/produtos/ncm/ para obter essa informação.
 * @pw_element string $cEAN Código EAN - European Article Number
 * @pw_element string $cCFOP CFOP - Código Fiscal de Operações e Prestações.<BR><BR>Utilize a tag "nCodigo" do método "ListarCFOP" da API<BR>/api/v1/produtos/cfop/ para obter essa informação.
 * @pw_element decimal $nQtdeNFe Quantidade da Nota
 * @pw_element string $cUnidadeNfe Unidade da Nota
 * @pw_element decimal $nPrecoUnit Preço unitário
 * @pw_element decimal $vDesconto Valor do desconto
 * @pw_element decimal $vFrete Valor do Frete
 * @pw_element decimal $vTotalItem Valor total do item
 * @pw_complex itensCabec
 */
class ItensCabec{
	/**
	 * Id do item da NFe de recebimento.<BR><BR>Preenchimento automático.
	 *
	 * @var integer
	 */
	public int $nIdItem;
	/**
	 * ID do Pedido de Compra
	 *
	 * @var integer
	 */
	public int $nIdPedido;
	/**
	 * ID do Item do Pedido
	 *
	 * @var integer
	 */
	public int $nIdItPedido;
	/**
	 * Id do produto. <BR><BR>Preenchimento obrigatório.<BR><BR>Esse campo não é exibido na tela de itens do recebimento da NFe. É uma informação interna, utilizada apenas nas APIs.<BR><BR>Utilize a tag "codigo_produto" do método "ListarProdutos" da API<BR>/api/v1/geral/produtos/ para obter essa informação.
	 *
	 * @var integer
	 */
	public int $nIdProduto;
	/**
	 * Número sequencial do item da NFe de recebimento
	 *
	 * @var integer
	 */
	public int $nSequencia;
	/**
	 * Código do Produto na NFe exibido na tela de recebimento
	 *
	 * @var string
	 */
	public string $cCodigoProduto;
	/**
	 * Descrição do produto
	 *
	 * @var string
	 */
	public string $cDescricaoProduto;
	/**
	 * Ignorar a importação do item da NFe de recebimento <BR><BR>Pode ser: <BR>S = Sim <BR>N = Não
	 *
	 * @var string
	 */
	public string $cIgnorarItem;
	/**
	 * Cadastrar como novo produto o item da NFe de recebimento <BR><BR>Pode ser: <BR>S = Sim <BR>N = Não
	 *
	 * @var string
	 */
	public string $cAdicionarNovo;
	/**
	 * Associar a um produto ou pedido existente o item da NFe de recebimento <BR><BR>Pode ser: <BR>S = Sim <BR>N = Não
	 *
	 * @var string
	 */
	public string $cAssociarExistente;
	/**
	 * Item da NFe de recebimento devolvido<BR><BR>Pode ser: <BR>S = Sim <BR>N = Não
	 *
	 * @var string
	 */
	public string $cItemDevolvido;
	/**
	 * NCM - Nomenclatura Comum do Mercosul<BR><BR>Utilize a tag "cCodigo" do método "ListarNCM" da API<BR>/api/v1/produtos/ncm/ para obter essa informação.
	 *
	 * @var string
	 */
	public string $cNCM;
	/**
	 * Código EAN - European Article Number
	 *
	 * @var string
	 */
	public string $cEAN;
	/**
	 * CFOP - Código Fiscal de Operações e Prestações.<BR><BR>Utilize a tag "nCodigo" do método "ListarCFOP" da API<BR>/api/v1/produtos/cfop/ para obter essa informação.
	 *
	 * @var string
	 */
	public string $cCFOP;
	/**
	 * Quantidade da Nota
	 *
	 * @var decimal
	 */
	public float $nQtdeNFe;
	/**
	 * Unidade da Nota
	 *
	 * @var string
	 */
	public string $cUnidadeNfe;
	/**
	 * Preço unitário
	 *
	 * @var decimal
	 */
	public float $nPrecoUnit;
	/**
	 * Valor do desconto
	 *
	 * @var decimal
	 */
	public float $vDesconto;
	/**
	 * Valor do Frete
	 *
	 * @var decimal
	 */
	public float $vFrete;
	/**
	 * Valor total do item
	 *
	 * @var decimal
	 */
	public float $vTotalItem;
}
