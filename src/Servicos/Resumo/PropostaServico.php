<?php

namespace OmieLib\Servicos\Resumo;

use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Resumo\Request\ObterResumoServRequest;
use OmieLib\Servicos\Resumo\Response\ObterResumoServResponse;

/**
 * Exibe os totais das Propostas de Ordens de Serviço.
 *
 * @pw_element string $cVisualizar Indica se o aplicativo possuí a configuração desse tipo de documento.<BR><BR>Pode ser: <BR>S<BR>N
 * @pw_element string $cNome Descrição da operação ( ordem de serviço / Proposta ).
 * @pw_element string $cNomePlural Descrição da operação no plural ( ordem de serviço / Proposta ).
 * @pw_element emAberto $emAberto Estrutura contendo os valores em aberto.
 * @pw_element string $cIcone Unicode do Ícone.
 * @pw_element string $cCor Hexadecimal da cor.
 * @pw_complex propostaServico
 */
class PropostaServico{
	/**
	 * Indica se o aplicativo possuí a configuração desse tipo de documento.<BR><BR>Pode ser: <BR>S<BR>N
	 *
	 * @var string
	 */
	public string $cVisualizar;
	/**
	 * Descrição da operação ( ordem de serviço / Proposta ).
	 *
	 * @var string
	 */
	public string $cNome;
	/**
	 * Descrição da operação no plural ( ordem de serviço / Proposta ).
	 *
	 * @var string
	 */
	public string $cNomePlural;
	/**
	 * Estrutura contendo os valores em aberto.
	 *
	 * @var EmAberto
	 */
	public EmAberto $emAberto;
	/**
	 * Unicode do Ícone.
	 *
	 * @var string
	 */
	public string $cIcone;
	/**
	 * Hexadecimal da cor.
	 *
	 * @var string
	 */
	public string $cCor;
}
