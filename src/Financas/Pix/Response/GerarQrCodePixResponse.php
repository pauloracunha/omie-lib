<?php

namespace OmieLib\Financas\Pix\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Financas\Pix\CInfo;
use OmieLib\Financas\Pix\ListaPix;
use OmieLib\Financas\Pix\ListaStatusPix;
use OmieLib\Financas\Pix\PIXJsonClient;
use OmieLib\Financas\Pix\Request\CancelarPixRequest;
use OmieLib\Financas\Pix\Request\GerarPixRequest;
use OmieLib\Financas\Pix\Request\GerarQrCodePixRequest;
use OmieLib\Financas\Pix\Request\ListarPixRequest;
use OmieLib\Financas\Pix\Request\ListarStatusPixRequest;
use OmieLib\Financas\Pix\Request\ObterPixRequest;
use OmieLib\Financas\Pix\Request\ObterStatusPixRequest;

/**
 * Resposta da geração do QrCode estático para pagamentos,
 *
 * @pw_element string $cUrlPix Link para obter o PDF do QrCode do PIX.
 * @pw_element string $cQrCode String para a renderização do QR Code PIX.
 * @pw_element string $cCopiaCola Código gerado a partir do QR Code para pagamento do PIX.
 * @pw_element string $cCodStatus Código do status do processamento.<BR>Se o retorno for '0' significa que a solicitação foi executada com sucesso.<BR>Se o retorno for maior que '0' ocorreu algum erro durante o processamento da solicitação.<BR>A tag 'cDesStatus' descreve o problema ocorrido.
 * @pw_element string $cDescStatus Descrição do status do processamento.<BR>Essa tag explica o resultado da tag 'cCodigoStatus'.
 * @pw_complex GerarQrCodePixResponse
 */
class GerarQrCodePixResponse{
	/**
	 * Link para obter o PDF do QrCode do PIX.
	 *
	 * @var string
	 */
	public string $cUrlPix;
	/**
	 * String para a renderização do QR Code PIX.
	 *
	 * @var string
	 */
	public string $cQrCode;
	/**
	 * Código gerado a partir do QR Code para pagamento do PIX.
	 *
	 * @var string
	 */
	public string $cCopiaCola;
	/**
	 * Código do status do processamento.<BR>Se o retorno for '0' significa que a solicitação foi executada com sucesso.<BR>Se o retorno for maior que '0' ocorreu algum erro durante o processamento da solicitação.<BR>A tag 'cDesStatus' descreve o problema ocorrido.
	 *
	 * @var string
	 */
	public string $cCodStatus;
	/**
	 * Descrição do status do processamento.<BR>Essa tag explica o resultado da tag 'cCodigoStatus'.
	 *
	 * @var string
	 */
	public string $cDescStatus;
}
