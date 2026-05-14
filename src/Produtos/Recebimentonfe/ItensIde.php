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
 * Identificação do item
 *
 * @pw_element integer $nSequencia Número sequencial do item da NFe de recebimento
 * @pw_element string $cAcao Ação a ser executada na alteração. <BR><BR>Informação obrigatória. <BR><BR>Pode ser: <BR>NOVO = Cadastrar como novo produto<BR>ASSOCIAR-PRODUTO = Associar a um produto existente<BR>ASSOCIAR-PEDIDO = Associar a um pedido/item existente<BR>IGNORAR = Ignorar a importação desse item na NFe<BR>EDITAR = Alterar as informações do item da NFe
 * @pw_element integer $nIdProdutoExistente Id do produto a ser associado
 * @pw_element integer $nIdPedidoExistente Id do pedido a ser associado
 * @pw_element integer $nIdItPedidoExistente Id do item do pedido a ser associado
 * @pw_complex itensIde
 */
class ItensIde{
	/**
	 * Número sequencial do item da NFe de recebimento
	 *
	 * @var integer
	 */
	public int $nSequencia;
	/**
	 * Ação a ser executada na alteração. <BR><BR>Informação obrigatória. <BR><BR>Pode ser: <BR>NOVO = Cadastrar como novo produto<BR>ASSOCIAR-PRODUTO = Associar a um produto existente<BR>ASSOCIAR-PEDIDO = Associar a um pedido/item existente<BR>IGNORAR = Ignorar a importação desse item na NFe<BR>EDITAR = Alterar as informações do item da NFe
	 *
	 * @var string
	 */
	public string $cAcao;
	/**
	 * Id do produto a ser associado
	 *
	 * @var integer
	 */
	public int $nIdProdutoExistente;
	/**
	 * Id do pedido a ser associado
	 *
	 * @var integer
	 */
	public int $nIdPedidoExistente;
	/**
	 * Id do item do pedido a ser associado
	 *
	 * @var integer
	 */
	public int $nIdItPedidoExistente;
}
