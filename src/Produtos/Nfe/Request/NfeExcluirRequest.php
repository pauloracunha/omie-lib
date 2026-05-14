<?php

namespace OmieLib\Produtos\Nfe\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Nfe\Itens;
use OmieLib\Produtos\Nfe\ItensXml;
use OmieLib\Produtos\Nfe\Lancamentos;
use OmieLib\Produtos\Nfe\ListagemNfe;
use OmieLib\Produtos\Nfe\Lote_validade;
use OmieLib\Produtos\Nfe\NfeJsonClient;
use OmieLib\Produtos\Nfe\Parcelas;
use OmieLib\Produtos\Nfe\Response\NfeCancelarResponse;
use OmieLib\Produtos\Nfe\Response\NfeExcluirResponse;
use OmieLib\Produtos\Nfe\Response\NfeImportarResponse;
use OmieLib\Produtos\Nfe\Response\NfeListarResponse;

/**
 * Solicitação da Exclusão de NF-e.
 *
 * @pw_element integer $nIdImportacao ID da Importação da NF-e.
 * @pw_element integer $nIdNFe ID do NF-e.
 * @pw_element string $cChaveNFe Chave da NF-e a ser importada.<BR><BR>Preenchimento obrigatório.<BR><BR>Apenas números com 44 digitos.
 * @pw_complex nfeExcluirRequest
 */
class NfeExcluirRequest{
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
}
