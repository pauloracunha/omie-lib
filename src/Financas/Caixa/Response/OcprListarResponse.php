<?php

namespace OmieLib\Financas\Caixa\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Financas\Caixa\ListaOrcamentos;
use OmieLib\Financas\Caixa\OrcamentoCaixaJsonClient;
use OmieLib\Financas\Caixa\Request\OcprListarRequest;

/**
 * Resposta da solicitação de listagem de Orçamento de Caixa - Previsto x Realizado.
 *
 * @pw_element string $nAno Código da Categoria
 * @pw_element string $nMes Mês.
 * @pw_element ListaOrcamentosArray $ListaOrcamentos Orçamento por categorias.
 * @pw_complex ocprListarResponse
 */
class OcprListarResponse{
	/**
	 * Código da Categoria
	 *
	 * @var string
	 */
	public string $nAno;
	/**
	 * Mês.
	 *
	 * @var string
	 */
	public string $nMes;
	/**
	 * Orçamento por categorias.
	 *
	 * @var ListaOrcamentos[]
	 */
	public array $ListaOrcamentos;
}
