<?php

namespace OmieLib\Servicos\Os;

use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Os\Request\OsListarRequest;
use OmieLib\Servicos\Os\Request\OsObterRequest;
use OmieLib\Servicos\Os\Request\OsStatusRequest;
use OmieLib\Servicos\Os\Request\OsTrocarEtapaRequest;
use OmieLib\Servicos\Os\Response\OsListarResponse;
use OmieLib\Servicos\Os\Response\OsObterResponse;
use OmieLib\Servicos\Os\Response\OsStatusResponse;
use OmieLib\Servicos\Os\Response\OsTrocarEtapaResponse;

/**
 * Evento na Nfse.
 *
 * @pw_element string $cCidadeEvento Código da Cidade da Prestação de Serviços.
 * @pw_element string $cCodPaisEvento Código do país do evento.
 * @pw_element string $cEndExtEvento Endereço no Exterior do evento.<BR><BR>A tag [cExtEvento] precisa ser preenchida como "S".
 * @pw_element string $cBairroEvento Bairro do Evento.
 * @pw_element string $cCepEvento CEP do Evento.
 * @pw_element string $cEndEvento Endereço do envento.
 * @pw_element string $cNumEndEvento Número do endereço do evento.
 * @pw_element string $cUfEvento Estado do evento.
 * @pw_element string $dDtIniEvento Data de Início do Evento.
 * @pw_element string $dDtFimEvento Data Final do Evento.
 * @pw_element string $cNomeEvento Nome do evento.
 * @pw_element string $cComplEvento Completo do endereço do evento.
 * @pw_element string $cCodAtivEvento Código de Atividade do evento.
 * @pw_element string $cExtEvento Evento no Exterior S/N.
 * @pw_element string $cCidadeExtEvento Cidade do evento no exterior.<BR><BR>A tag [cExtEvento] precisa ser preenchida como "S".
 * @pw_complex Eventos
 */
class Eventos{
	/**
	 * Código da Cidade da Prestação de Serviços.
	 *
	 * @var string
	 */
	public string $cCidadeEvento;
	/**
	 * Código do país do evento.
	 *
	 * @var string
	 */
	public string $cCodPaisEvento;
	/**
	 * Endereço no Exterior do evento.<BR><BR>A tag [cExtEvento] precisa ser preenchida como "S".
	 *
	 * @var string
	 */
	public string $cEndExtEvento;
	/**
	 * Bairro do Evento.
	 *
	 * @var string
	 */
	public string $cBairroEvento;
	/**
	 * CEP do Evento.
	 *
	 * @var string
	 */
	public string $cCepEvento;
	/**
	 * Endereço do envento.
	 *
	 * @var string
	 */
	public string $cEndEvento;
	/**
	 * Número do endereço do evento.
	 *
	 * @var string
	 */
	public string $cNumEndEvento;
	/**
	 * Estado do evento.
	 *
	 * @var string
	 */
	public string $cUfEvento;
	/**
	 * Data de Início do Evento.
	 *
	 * @var string
	 */
	public string $dDtIniEvento;
	/**
	 * Data Final do Evento.
	 *
	 * @var string
	 */
	public string $dDtFimEvento;
	/**
	 * Nome do evento.
	 *
	 * @var string
	 */
	public string $cNomeEvento;
	/**
	 * Completo do endereço do evento.
	 *
	 * @var string
	 */
	public string $cComplEvento;
	/**
	 * Código de Atividade do evento.
	 *
	 * @var string
	 */
	public string $cCodAtivEvento;
	/**
	 * Evento no Exterior S/N.
	 *
	 * @var string
	 */
	public string $cExtEvento;
	/**
	 * Cidade do evento no exterior.<BR><BR>A tag [cExtEvento] precisa ser preenchida como "S".
	 *
	 * @var string
	 */
	public string $cCidadeExtEvento;
}
