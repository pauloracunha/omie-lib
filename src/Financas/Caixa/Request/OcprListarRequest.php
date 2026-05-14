<?php

namespace OmieLib\Financas\Caixa\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Financas\Caixa\ListaOrcamentos;
use OmieLib\Financas\Caixa\OrcamentoCaixaJsonClient;
use OmieLib\Financas\Caixa\Response\OcprListarResponse;

/**
 * Solicitação de listagem de Orçamento de Caixa - Previsto x Realizado.
 *
 * @pw_element integer $nAno Ano.
 * @pw_element integer $nMes Mês.
 * @pw_complex ocprListarRequest
 */
class OcprListarRequest{
	/**
	 * Ano.
	 *
	 * @var integer
	 */
	public int $nAno;
	/**
	 * Mês.
	 *
	 * @var integer
	 */
	public int $nMes;
}
