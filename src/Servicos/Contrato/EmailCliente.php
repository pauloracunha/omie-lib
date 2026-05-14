<?php

namespace OmieLib\Servicos\Contrato;

use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Contrato\Request\CsConsultarRequest;
use OmieLib\Servicos\Contrato\Request\CsExcluirItemRequest;
use OmieLib\Servicos\Contrato\Request\CsListarRequest;
use OmieLib\Servicos\Contrato\Response\CsConsultarResponse;
use OmieLib\Servicos\Contrato\Response\CsExcluirItemResponse;
use OmieLib\Servicos\Contrato\Response\CsListarResponse;

/**
 * Dados do envio de e-mail do cliente
 *
 * @pw_element string $cEnviarRecibo Enviar um recibo de prestação de serviço (ao invés de NFS-e)
 * @pw_element string $cEnviarLinkNfse Enviar o link da NFS-e gerada na Prefeitura
 * @pw_element string $cEnviarBoleto Enviar também o(s) boleto(s) de cobrança
 * @pw_element string $cEnviarPix Enviar também o(s) PIX(s) de cobrança
 * @pw_element string $cUtilizarEmails Utilizar os seguintes endereços de e-mail
 * @pw_element string $cEnvViaUnica Enviar ao cliente Via Única (Nota Fiscais Modelos 21 e 22).<BR><BR>Pode ser: <BR>S - Sim<BR>N - Não
 * @pw_complex emailCliente
 */
class EmailCliente{
	/**
	 * Enviar um recibo de prestação de serviço (ao invés de NFS-e)
	 *
	 * @var string
	 */
	public string $cEnviarRecibo;
	/**
	 * Enviar o link da NFS-e gerada na Prefeitura
	 *
	 * @var string
	 */
	public string $cEnviarLinkNfse;
	/**
	 * Enviar também o(s) boleto(s) de cobrança
	 *
	 * @var string
	 */
	public string $cEnviarBoleto;
	/**
	 * Enviar também o(s) PIX(s) de cobrança
	 *
	 * @var string
	 */
	public string $cEnviarPix;
	/**
	 * Utilizar os seguintes endereços de e-mail
	 *
	 * @var string
	 */
	public string $cUtilizarEmails;
	/**
	 * Enviar ao cliente Via Única (Nota Fiscais Modelos 21 e 22).<BR><BR>Pode ser: <BR>S - Sim<BR>N - Não
	 *
	 * @var string
	 */
	public string $cEnvViaUnica;
}
