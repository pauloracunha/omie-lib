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
 * Listagem de NF-es importadas.
 *
 * @pw_element integer $nPagina Número da página resgatada.
 * @pw_element integer $nRegPorPagina Número de registros retornados na página.
 * @pw_element string $dDataEmissaoInicial Data de emissão inicial.<BR>No formato dd/mm/aaaa.<BR><BR>Preenchimento opcional.<BR><BR>
 * @pw_element string $dDataEmissaoFinal Data de emissão final.<BR>No formato dd/mm/aaaa.<BR><BR>Preenchimento opcional.
 * @pw_element string $dDataInclusaoInicial Data de Inclusão Inicial.<BR>No formato dd/mm/aaaa.<BR><BR>Preenchimento opcional.
 * @pw_element string $dDataInclusaoFinal Data de Inclusão Final.<BR>No formato dd/mm/aaaa.<BR><BR>Preenchimento opcional.
 * @pw_element integer $nIdImportacao ID da Importação da NF-e.
 * @pw_element integer $nIdNFe ID do NF-e.
 * @pw_element string $cChaveNFe Chave da NF-e a ser importada.<BR><BR>Preenchimento obrigatório.<BR><BR>Apenas números com 44 digitos.
 * @pw_complex nfeListarRequest
 */
class NfeListarRequest{
	/**
	 * Número da página resgatada.
	 *
	 * @var integer
	 */
	public int $nPagina;
	/**
	 * Número de registros retornados na página.
	 *
	 * @var integer
	 */
	public int $nRegPorPagina;
	/**
	 * Data de emissão inicial.<BR>No formato dd/mm/aaaa.<BR><BR>Preenchimento opcional.<BR><BR>
	 *
	 * @var string
	 */
	public string $dDataEmissaoInicial;
	/**
	 * Data de emissão final.<BR>No formato dd/mm/aaaa.<BR><BR>Preenchimento opcional.
	 *
	 * @var string
	 */
	public string $dDataEmissaoFinal;
	/**
	 * Data de Inclusão Inicial.<BR>No formato dd/mm/aaaa.<BR><BR>Preenchimento opcional.
	 *
	 * @var string
	 */
	public string $dDataInclusaoInicial;
	/**
	 * Data de Inclusão Final.<BR>No formato dd/mm/aaaa.<BR><BR>Preenchimento opcional.
	 *
	 * @var string
	 */
	public string $dDataInclusaoFinal;
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
