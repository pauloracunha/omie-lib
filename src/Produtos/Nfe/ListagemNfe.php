<?php

namespace OmieLib\Produtos\Nfe;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Nfe\Request\NfeCancelarRequest;
use OmieLib\Produtos\Nfe\Request\NfeExcluirRequest;
use OmieLib\Produtos\Nfe\Request\NfeImportarRequest;
use OmieLib\Produtos\Nfe\Request\NfeListarRequest;
use OmieLib\Produtos\Nfe\Response\NfeCancelarResponse;
use OmieLib\Produtos\Nfe\Response\NfeExcluirResponse;
use OmieLib\Produtos\Nfe\Response\NfeImportarResponse;
use OmieLib\Produtos\Nfe\Response\NfeListarResponse;

/**
 * Lista de NFes importadas.
 *
 * @pw_element string $cAppNome Nome do Aplicativo que emitiu a NF-e.<BR><BR>Preenchimento obrigatório.<BR><BR>Exemplo:<BR>GeradorNF-e
 * @pw_element string $cAppVersao Versão do Aplicativo que emitiu a NF-e.<BR><BR>Preenchimento obrigatório.<BR><BR>Exemplo:<BR>1.02.01
 * @pw_element string $cAppId Identificação do aplicativo que emitiu a NF-e.<BR><BR>Preenchimento obrigatório.<BR><BR>Exemplo:<BR>ID001<BR><BR>PS: Informe o código que identifica a instalação do aplicativo.<BR>Caso o cliente tenha 2 Emissores de NF-e, indique: "01" e "02" ou "10" e "20" e assim por diante.
 * @pw_element string $cOperacao Tipo de Operação da Nota Fiscal.<BR><BR>Preenchimento obrigatório.<BR><BR>Códigos Disponíveis:<BR><BR>11 - Venda de produtos<BR>21 - Compra de produtos
 * @pw_element string $cOrigem Origem da Nota Fiscal.<BR><BR>Preenchimento opcional.<BR><BR>Códigos Disponíveis:<BR><BR>API - Importado via API.<BR>
 * @pw_element integer $nCliente Id do cliente.<BR><BR>Preenchimento opcional.
 * @pw_element integer $nIdImportacao ID da Importação da NF-e.
 * @pw_element integer $nIdNFe ID do NF-e.
 * @pw_element string $cChaveNFe Chave da NF-e a ser importada.<BR><BR>Preenchimento obrigatório.<BR><BR>Apenas números com 44 digitos.
 * @pw_element string $dDataEmissao Data de emissão da NF-e.
 * @pw_element string $cNumeroNFe Número da NF-e.
 * @pw_element decimal $nValorNFe Valor da NF-e.
 * @pw_element string $cStatus Status da importação.<BR><BR>Pode ser:<BR>1 - Em processamento.<BR>4 - Importada com sucesso.<BR>9 - Erro na importação.
 * @pw_element string $dDataImportacao Data da importação
 * @pw_element string $cHoraImportacao Hora da importação.
 * @pw_element string $cExcluido Indica se o registro foi excluído (S ou N).
 * @pw_element string $dDataExclusao Data de exclusão.
 * @pw_element string $cHoraExclusao Hora de exclusão.
 * @pw_element integer $nIdExcusao ID da exclusão.
 * @pw_complex listagemNfe
 */
class ListagemNfe{
	/**
	 * Nome do Aplicativo que emitiu a NF-e.<BR><BR>Preenchimento obrigatório.<BR><BR>Exemplo:<BR>GeradorNF-e
	 *
	 * @var string
	 */
	public string $cAppNome;
	/**
	 * Versão do Aplicativo que emitiu a NF-e.<BR><BR>Preenchimento obrigatório.<BR><BR>Exemplo:<BR>1.02.01
	 *
	 * @var string
	 */
	public string $cAppVersao;
	/**
	 * Identificação do aplicativo que emitiu a NF-e.<BR><BR>Preenchimento obrigatório.<BR><BR>Exemplo:<BR>ID001<BR><BR>PS: Informe o código que identifica a instalação do aplicativo.<BR>Caso o cliente tenha 2 Emissores de NF-e, indique: "01" e "02" ou "10" e "20" e assim por diante.
	 *
	 * @var string
	 */
	public string $cAppId;
	/**
	 * Tipo de Operação da Nota Fiscal.<BR><BR>Preenchimento obrigatório.<BR><BR>Códigos Disponíveis:<BR><BR>11 - Venda de produtos<BR>21 - Compra de produtos
	 *
	 * @var string
	 */
	public string $cOperacao;
	/**
	 * Origem da Nota Fiscal.<BR><BR>Preenchimento opcional.<BR><BR>Códigos Disponíveis:<BR><BR>API - Importado via API.<BR>
	 *
	 * @var string
	 */
	public string $cOrigem;
	/**
	 * Id do cliente.<BR><BR>Preenchimento opcional.
	 *
	 * @var integer
	 */
	public int $nCliente;
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
	 * Data de emissão da NF-e.
	 *
	 * @var string
	 */
	public string $dDataEmissao;
	/**
	 * Número da NF-e.
	 *
	 * @var string
	 */
	public string $cNumeroNFe;
	/**
	 * Valor da NF-e.
	 *
	 * @var decimal
	 */
	public float $nValorNFe;
	/**
	 * Status da importação.<BR><BR>Pode ser:<BR>1 - Em processamento.<BR>4 - Importada com sucesso.<BR>9 - Erro na importação.
	 *
	 * @var string
	 */
	public string $cStatus;
	/**
	 * Data da importação
	 *
	 * @var string
	 */
	public string $dDataImportacao;
	/**
	 * Hora da importação.
	 *
	 * @var string
	 */
	public string $cHoraImportacao;
	/**
	 * Indica se o registro foi excluído (S ou N).
	 *
	 * @var string
	 */
	public string $cExcluido;
	/**
	 * Data de exclusão.
	 *
	 * @var string
	 */
	public string $dDataExclusao;
	/**
	 * Hora de exclusão.
	 *
	 * @var string
	 */
	public string $cHoraExclusao;
	/**
	 * ID da exclusão.
	 *
	 * @var integer
	 */
	public int $nIdExcusao;
}
