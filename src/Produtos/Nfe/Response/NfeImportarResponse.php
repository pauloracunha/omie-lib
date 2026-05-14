<?php

namespace OmieLib\Produtos\Nfe\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Nfe\Itens;
use OmieLib\Produtos\Nfe\ItensXml;
use OmieLib\Produtos\Nfe\Lancamentos;
use OmieLib\Produtos\Nfe\ListagemNfe;
use OmieLib\Produtos\Nfe\Lote_validade;
use OmieLib\Produtos\Nfe\NfeJsonClient;
use OmieLib\Produtos\Nfe\Parcelas;
use OmieLib\Produtos\Nfe\Request\NfeCancelarRequest;
use OmieLib\Produtos\Nfe\Request\NfeExcluirRequest;
use OmieLib\Produtos\Nfe\Request\NfeImportarRequest;
use OmieLib\Produtos\Nfe\Request\NfeListarRequest;

/**
 * Resposta da solicitação da Importação de NF-e.
 *
 * @pw_element integer $nIdImportacao ID da Importação da NF-e.
 * @pw_element integer $nIdNFe ID do NF-e.
 * @pw_element string $cChaveNFe Chave da NF-e a ser importada.<BR><BR>Preenchimento obrigatório.<BR><BR>Apenas números com 44 digitos.
 * @pw_element string $cCodStatus Código do Status do processamento.
 * @pw_element string $cDesStatus Descrição do status de processamento.
 * @pw_complex nfeImportarResponse
 */
class NfeImportarResponse{
	/**
	 * ID da Importação da NF-e.
	 *
	 * @var integer
	 */
	public int $nIdImportacao;
	/**
	 * ID do NF-e.
	 *
	 * @var integer
	 */
	public int $nIdNFe;
	/**
	 * Chave da NF-e a ser importada.<BR><BR>Preenchimento obrigatório.<BR><BR>Apenas números com 44 digitos.
	 *
	 * @var string
	 */
	public string $cChaveNFe;
	/**
	 * Código do Status do processamento.
	 *
	 * @var string
	 */
	public string $cCodStatus;
	/**
	 * Descrição do status de processamento.
	 *
	 * @var string
	 */
	public string $cDesStatus;
}
