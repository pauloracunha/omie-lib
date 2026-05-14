<?php

namespace OmieLib\Geral\Parcelas\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Geral\Parcelas\Cadastros;
use OmieLib\Geral\Parcelas\ParcelasJsonClient;
use OmieLib\Geral\Parcelas\Request\ParcelaIncluirRequest;
use OmieLib\Geral\Parcelas\Request\ParcelaListarRequest;

/**
 * Resposta da solicitação da inclusão de parcela.
 *
 * @pw_element string $cCodStatus Código do status do processamento.<BR>Se o retorno for '0' significa que a solicitação foi executada com sucesso.<BR>Se o retorno for maior que '0' ocorreu algum erro durante o processamento da solicitação.<BR>A tag 'cDesStatus' descreve o problema ocorrido.
 * @pw_element string $cDesStatus Descrição do status do processamento.<BR>Essa tag explica o resultado da tag 'cCodigoStatus'.
 * @pw_element string $cCodParcela Código da parcela gerada.
 * @pw_element string $cDesParcela Descrição para o número de parcelas
 * @pw_complex parcelaIncluirResponse
 */
class ParcelaIncluirResponse{
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
	public string $cDesStatus;
	/**
	 * Código da parcela gerada.
	 *
	 * @var string
	 */
	public string $cCodParcela;
	/**
	 * Descrição para o número de parcelas
	 *
	 * @var string
	 */
	public string $cDesParcela;
}
