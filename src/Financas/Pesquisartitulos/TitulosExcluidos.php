<?php

namespace OmieLib\Financas\Pesquisartitulos;

use OmieLib\Common\OmieFail;
use OmieLib\Financas\Pesquisartitulos\Request\LtLinkBoletoRequest;
use OmieLib\Financas\Pesquisartitulos\Request\LtListarExcluidosRequest;
use OmieLib\Financas\Pesquisartitulos\Request\LtPesquisarRequest;
use OmieLib\Financas\Pesquisartitulos\Response\LtLinkBoletoResponse;
use OmieLib\Financas\Pesquisartitulos\Response\LtListarExcluidosResponse;
use OmieLib\Financas\Pesquisartitulos\Response\LtPesquisarResponse;

/**
 * Lista os lançamentos excluídos em um determinado período.
 *
 * @pw_element integer $nCodTitulo Código do titulo.<BR>(Gerado internamente, não é visualizado na tela)
 * @pw_element string $dDataExc Data de exclusão.
 * @pw_element string $cHoraExc Hora de exclusão.
 * @pw_element string $cUsuarioExc Usuário da exclusão,
 * @pw_element string $cAcao Tipo de ação executada. <BR>Pode ser:<BR><BR>E - Conta a pagar/receber excluída.<BR>
 * @pw_complex titulosExcluidos
 */
class TitulosExcluidos{
	/**
	 * Código do titulo.<BR>(Gerado internamente, não é visualizado na tela)
	 *
	 * @var integer
	 */
	public int $nCodTitulo;
	/**
	 * Data de exclusão.
	 *
	 * @var string
	 */
	public string $dDataExc;
	/**
	 * Hora de exclusão.
	 *
	 * @var string
	 */
	public string $cHoraExc;
	/**
	 * Usuário da exclusão,
	 *
	 * @var string
	 */
	public string $cUsuarioExc;
	/**
	 * Tipo de ação executada. <BR>Pode ser:<BR><BR>E - Conta a pagar/receber excluída.<BR>
	 *
	 * @var string
	 */
	public string $cAcao;
}
