<?php

namespace OmieLib\Produtos\ComprasResumo;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\ComprasResumo\Request\ObterResumoComprasRequest;
use OmieLib\Produtos\ComprasResumo\Response\ObterResumoComprasResponse;

/**
 * Exibe os totais de faturamentos das Ordens de Produção.
 *
 * @pw_element etapa1 $etapa1 Primeira etapa do fluxo de Ordem de Produção.
 * @pw_element etapa2 $etapa2 Segunda etapa do fluxo de Ordem de Produção.
 * @pw_element etapa3 $etapa3 Terceira etapa do fluxo de Ordem de Produção.
 * @pw_element etapa4 $etapa4 Quarta etapa do fluxo de Ordem de Produção.
 * @pw_element etapa5 $etapa5 Quinta etapa do fluxo de Ordem de Produção.
 * @pw_element etapa6 $etapa6 Sexta etapa do fluxo de Ordem de Produção.
 * @pw_element string $cVisualizar Indica se o aplicativo possuí a configuração desse tipo de documento.<BR><BR>Pode ser: <BR>S<BR>N
 * @pw_complex ordemProducao
 */
class OrdemProducao{
	/**
	 * Primeira etapa do fluxo de Ordem de Produção.
	 *
	 * @var Etapa1
	 */
	public Etapa1 $etapa1;
	/**
	 * Segunda etapa do fluxo de Ordem de Produção.
	 *
	 * @var Etapa2
	 */
	public Etapa2 $etapa2;
	/**
	 * Terceira etapa do fluxo de Ordem de Produção.
	 *
	 * @var Etapa3
	 */
	public Etapa3 $etapa3;
	/**
	 * Quarta etapa do fluxo de Ordem de Produção.
	 *
	 * @var Etapa4
	 */
	public Etapa4 $etapa4;
	/**
	 * Quinta etapa do fluxo de Ordem de Produção.
	 *
	 * @var Etapa5
	 */
	public Etapa5 $etapa5;
	/**
	 * Sexta etapa do fluxo de Ordem de Produção.
	 *
	 * @var Etapa6
	 */
	public Etapa6 $etapa6;
	/**
	 * Indica se o aplicativo possuí a configuração desse tipo de documento.<BR><BR>Pode ser: <BR>S<BR>N
	 *
	 * @var string
	 */
	public string $cVisualizar;
}
