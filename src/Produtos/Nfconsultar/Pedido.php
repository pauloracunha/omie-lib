<?php

namespace OmieLib\Produtos\Nfconsultar;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Nfconsultar\Request\NfListarRequest;
use OmieLib\Produtos\Nfconsultar\Response\NfListarResponse;

/**
 * Dados do pedido.
 *
 * @pw_element string $cNumPedido Número do Pedido do Venda.<BR>Preenchimento automático - Não informar.
 * @pw_element string $dIncPedido Data da Inclusão do Pedido de Venda.<BR>Preenchimento automático - Não informar.
 * @pw_element string $hIncPedido Hora da Inclusão do Pedido de Venda.<BR>Preenchimento automático - Não informar.
 * @pw_element string $uIncPedido Usuário da Inclusão do Pedido de Venda.<BR>Preenchimento automático - Não informar.
 * @pw_element string $dAltPedido Data da Alteração do Pedido de Venda.<BR>Preenchimento automático - Não informar.
 * @pw_element string $hAltPedido Hora da Alteração do Pedido de Venda.<BR>Preenchimento automático - Não informar.
 * @pw_element string $uAltPedido Usuário da Alteração do Pedido de Venda.<BR>Preenchimento automático - Não informar.
 * @pw_element string $cCancelado Indica que o Pedido de Venda foi cancelado.<BR>Preenchimento automático - Não informar.
 * @pw_element string $dCanPedido Data de Cancelamento do Pedido de Venda.<BR>Preenchimento automático - Não informar.
 * @pw_element string $hCanPedido Hora de Cancelamento do Pedido de Venda.<BR>Preenchimento automático - Não informar.
 * @pw_element string $uCanPedido Usuário de Cancelamento do Pedido de Venda.<BR>Preenchimento automático - Não informar.
 * @pw_element string $cDevolvido Indica que o Pedido de Venda foi devolvido.<BR>Preenchimento automático - Não informar.
 * @pw_element string $cDevParcial Indica que o Pedido de Venda se foi uma devolução parcial.<BR>Preenchimento automático - Não informar.
 * @pw_element string $dDevPedido Data de Cancelamento do Pedido de Venda.<BR>Preenchimento automático - Não informar.
 * @pw_element string $hDevPedido Hora de Cancelamento do Pedido de Venda.<BR>Preenchimento automático - Não informar.
 * @pw_element string $uDevPedido Usuário de Cancelamento do Pedido de Venda.<BR>Preenchimento automático - Não informar.
 * @pw_element integer $nIdVendedor Código do Vendedor no Pedido.
 * @pw_element integer $nIdProjeto Código do Projeto no Pedido.
 * @pw_element string $opPedido Operação do Pedido de venda que originou a NF.<BR><BR>Pode ser:<BR><BR>Vendas<BR>01 Venda de Serviço              <BR>11 Venda de Produto              <BR>12 Venda de Produto pelo PDV     <BR>13 Devolução de Venda            <BR>14 Remessa de Produto            <BR>16 Nota Complementar de Saída    <BR><BR>Compras<BR>21 Compra de Produto             <BR>23 Devolução ao Fornecedor       <BR>24 Retorno de Remessa            <BR>26 Nota Complementar de Entrada  <BR>22 Compra de Produto (Importação)<BR>28 Ordem de Produção
 * @pw_element integer $nIdPedDev Id do Pedido de venda devolvido.
 * @pw_element DepartamentosArray $Departamentos Distribuição por Departamentos.
 * @pw_element CategoriasArray $Categorias Distribuição por Categorias.
 * @pw_complex pedido
 */
class Pedido{
	/**
	 * Número do Pedido do Venda.<BR>Preenchimento automático - Não informar.
	 *
	 * @var string
	 */
	public string $cNumPedido;
	/**
	 * Data da Inclusão do Pedido de Venda.<BR>Preenchimento automático - Não informar.
	 *
	 * @var string
	 */
	public string $dIncPedido;
	/**
	 * Hora da Inclusão do Pedido de Venda.<BR>Preenchimento automático - Não informar.
	 *
	 * @var string
	 */
	public string $hIncPedido;
	/**
	 * Usuário da Inclusão do Pedido de Venda.<BR>Preenchimento automático - Não informar.
	 *
	 * @var string
	 */
	public string $uIncPedido;
	/**
	 * Data da Alteração do Pedido de Venda.<BR>Preenchimento automático - Não informar.
	 *
	 * @var string
	 */
	public string $dAltPedido;
	/**
	 * Hora da Alteração do Pedido de Venda.<BR>Preenchimento automático - Não informar.
	 *
	 * @var string
	 */
	public string $hAltPedido;
	/**
	 * Usuário da Alteração do Pedido de Venda.<BR>Preenchimento automático - Não informar.
	 *
	 * @var string
	 */
	public string $uAltPedido;
	/**
	 * Indica que o Pedido de Venda foi cancelado.<BR>Preenchimento automático - Não informar.
	 *
	 * @var string
	 */
	public string $cCancelado;
	/**
	 * Data de Cancelamento do Pedido de Venda.<BR>Preenchimento automático - Não informar.
	 *
	 * @var string
	 */
	public string $dCanPedido;
	/**
	 * Hora de Cancelamento do Pedido de Venda.<BR>Preenchimento automático - Não informar.
	 *
	 * @var string
	 */
	public string $hCanPedido;
	/**
	 * Usuário de Cancelamento do Pedido de Venda.<BR>Preenchimento automático - Não informar.
	 *
	 * @var string
	 */
	public string $uCanPedido;
	/**
	 * Indica que o Pedido de Venda foi devolvido.<BR>Preenchimento automático - Não informar.
	 *
	 * @var string
	 */
	public string $cDevolvido;
	/**
	 * Indica que o Pedido de Venda se foi uma devolução parcial.<BR>Preenchimento automático - Não informar.
	 *
	 * @var string
	 */
	public string $cDevParcial;
	/**
	 * Data de Cancelamento do Pedido de Venda.<BR>Preenchimento automático - Não informar.
	 *
	 * @var string
	 */
	public string $dDevPedido;
	/**
	 * Hora de Cancelamento do Pedido de Venda.<BR>Preenchimento automático - Não informar.
	 *
	 * @var string
	 */
	public string $hDevPedido;
	/**
	 * Usuário de Cancelamento do Pedido de Venda.<BR>Preenchimento automático - Não informar.
	 *
	 * @var string
	 */
	public string $uDevPedido;
	/**
	 * Código do Vendedor no Pedido.
	 *
	 * @var integer
	 */
	public int $nIdVendedor;
	/**
	 * Código do Projeto no Pedido.
	 *
	 * @var integer
	 */
	public int $nIdProjeto;
	/**
	 * Operação do Pedido de venda que originou a NF.<BR><BR>Pode ser:<BR><BR>Vendas<BR>01 Venda de Serviço              <BR>11 Venda de Produto              <BR>12 Venda de Produto pelo PDV     <BR>13 Devolução de Venda            <BR>14 Remessa de Produto            <BR>16 Nota Complementar de Saída    <BR><BR>Compras<BR>21 Compra de Produto             <BR>23 Devolução ao Fornecedor       <BR>24 Retorno de Remessa            <BR>26 Nota Complementar de Entrada  <BR>22 Compra de Produto (Importação)<BR>28 Ordem de Produção
	 *
	 * @var string
	 */
	public string $opPedido;
	/**
	 * Id do Pedido de venda devolvido.
	 *
	 * @var integer
	 */
	public int $nIdPedDev;
	/**
	 * Distribuição por Departamentos.
	 *
	 * @var Departamentos[]
	 */
	public array $Departamentos;
	/**
	 * Distribuição por Categorias.
	 *
	 * @var Categorias[]
	 */
	public array $Categorias;
}
