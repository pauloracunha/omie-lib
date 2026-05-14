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
 * Informações do E-Mail
 *
 * @pw_element string $cEnvRecibo Enviar um recibo de prestação de serviços (ao invés da NFS-e)
 * @pw_element string $cEnvLink Enviar ao Cliente e-mail com o link do site da prefeitura para consultar  a NFSe emitida.
 * @pw_element string $cEnvBoleto Enviar ao cliente e-mail com os Boletos de Cobrança gerados pelo faturamento.<BR><BR>É permitido somente o preenchimento de uma das tags "cEnvPix" ou "cEnvBoleto".
 * @pw_element string $cEnvPix Enviar ao cliente e-mail com o PIX de Cobrança gerado pelo faturamento.<BR><BR>É permitido somente o preenchimento de uma das tags "cEnvPix" ou "cEnvBoleto".
 * @pw_element string $cEnviarPara Utilizar os seguintes endereços de e-mail
 * @pw_element string $cEnvViaUnica Enviar ao cliente Via Única (Notas Fiscais Modelos 21 e 22).<BR><BR>Pode ser: <BR>S - Sim<BR>N - Não
 * @pw_complex Email
 */
class Email{
	/**
	 * Enviar um recibo de prestação de serviços (ao invés da NFS-e)
	 *
	 * @var string
	 */
	public string $cEnvRecibo;
	/**
	 * Enviar ao Cliente e-mail com o link do site da prefeitura para consultar  a NFSe emitida.
	 *
	 * @var string
	 */
	public string $cEnvLink;
	/**
	 * Enviar ao cliente e-mail com os Boletos de Cobrança gerados pelo faturamento.<BR><BR>É permitido somente o preenchimento de uma das tags "cEnvPix" ou "cEnvBoleto".
	 *
	 * @var string
	 */
	public string $cEnvBoleto;
	/**
	 * Enviar ao cliente e-mail com o PIX de Cobrança gerado pelo faturamento.<BR><BR>É permitido somente o preenchimento de uma das tags "cEnvPix" ou "cEnvBoleto".
	 *
	 * @var string
	 */
	public string $cEnvPix;
	/**
	 * Utilizar os seguintes endereços de e-mail
	 *
	 * @var string
	 */
	public string $cEnviarPara;
	/**
	 * Enviar ao cliente Via Única (Notas Fiscais Modelos 21 e 22).<BR><BR>Pode ser: <BR>S - Sim<BR>N - Não
	 *
	 * @var string
	 */
	public string $cEnvViaUnica;
}
