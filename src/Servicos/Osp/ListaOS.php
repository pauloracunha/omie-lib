<?php

namespace OmieLib\Servicos\Osp;

use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Osp\Request\OsAssociarCodIntRequest;
use OmieLib\Servicos\Osp\Request\OsCancelarRequest;
use OmieLib\Servicos\Osp\Request\OsDuplicarRequest;
use OmieLib\Servicos\Osp\Request\OsFaturarRequest;
use OmieLib\Servicos\Osp\Request\OsObterRequest;
use OmieLib\Servicos\Osp\Request\OsReenviarRequest;
use OmieLib\Servicos\Osp\Request\OsValidarRequest;
use OmieLib\Servicos\Osp\Response\OsAssociarCodIntResponse;
use OmieLib\Servicos\Osp\Response\OsCancelarResponse;
use OmieLib\Servicos\Osp\Response\OsDuplicarResponse;
use OmieLib\Servicos\Osp\Response\OsFaturarResponse;
use OmieLib\Servicos\Osp\Response\OsObterResponse;
use OmieLib\Servicos\Osp\Response\OsReenviarResponse;
use OmieLib\Servicos\Osp\Response\OsValidarResponse;

/**
 * Lista de Ordens de Serviço de uma etapa.
 *
 * @pw_element integer $nIdPed Código do Pedido de Venda
 * @pw_element string $cNumPedido Número do Pedido de Venda<BR>
 * @pw_complex listaOS
 */
class ListaOS{
	/**
	 * Código do Pedido de Venda
	 *
	 * @var integer
	 */
	public int $nIdPed;
	/**
	 * Número do Pedido de Venda<BR>
	 *
	 * @var string
	 */
	public string $cNumPedido;
}
