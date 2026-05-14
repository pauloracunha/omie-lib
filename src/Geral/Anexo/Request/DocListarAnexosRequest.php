<?php

namespace OmieLib\Geral\Anexo\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Geral\Anexo\DocumentoAnexoJsonClient;
use OmieLib\Geral\Anexo\Info;
use OmieLib\Geral\Anexo\ListaAnexos;
use OmieLib\Geral\Anexo\Response\DocConsultarAnexoResponse;
use OmieLib\Geral\Anexo\Response\DocExcluirAnexoResponse;
use OmieLib\Geral\Anexo\Response\DocIncluirAnexoResponse;
use OmieLib\Geral\Anexo\Response\DocListarAnexosResponse;
use OmieLib\Geral\Anexo\Response\DocObterAnexoResponse;

/**
 * Solicitação de listagem de anexos de um Documento.
 *
 * @pw_element integer $nPagina Número da página resgatada.
 * @pw_element integer $nRegPorPagina Número de registros retornados na página.
 * @pw_element string $cOrdenarPor Ordem os resultados da página por:<BR>ARQUIVO - Nome do arquivo.<BR>
 * @pw_element string $cOrdemDecrescente Indica se a ordem de exibição é Decrescente caso seja informado "S".
 * @pw_element string $dDtIncDe Data de inclusão inicial.<BR>No formato dd/mm/aaaa.
 * @pw_element string $dDtIncAte Data de inclusão final.<BR>No formato dd/mm/aaaa.
 * @pw_element string $dDtAltDe Data de alteração inicial.<BR>No formato dd/mm/aaaa.
 * @pw_element string $dDtAltAte Data de alteração final.<BR>No formato dd/mm/aaaa.
 * @pw_element integer $nId ID do documento de acordo com a tabela especificada.<BR><BR>Por exemplo:<BR>Caso você informe "cliente" na tag "cTabela" você deve informar o ID do cliente neste campo.<BR><BR>Preenchimento obrigatório.
 * @pw_element string $cTabela Nome da tabela onde o anexo está incluído.<BR><BR>Pode ser: <BR>cliente<BR>produto<BR>servico<BR>pedido-venda<BR>remessa-produto<BR>ordem-servico<BR>contrato-servico<BR>pedido-compra<BR>nota-entrada<BR>ordem-producao<BR>conta-pagar<BR>conta-receber<BR>conta-corrente<BR>conta-corrente-lancamento<BR>crm-contas<BR>crm-contatos<BR>crm-oportunidades<BR>com-recebimento
 * @pw_complex docListarAnexosRequest
 */
class DocListarAnexosRequest{
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
	 * Ordem os resultados da página por:<BR>ARQUIVO - Nome do arquivo.<BR>
	 *
	 * @var string
	 */
	public string $cOrdenarPor;
	/**
	 * Indica se a ordem de exibição é Decrescente caso seja informado "S".
	 *
	 * @var string
	 */
	public string $cOrdemDecrescente;
	/**
	 * Data de inclusão inicial.<BR>No formato dd/mm/aaaa.
	 *
	 * @var string
	 */
	public string $dDtIncDe;
	/**
	 * Data de inclusão final.<BR>No formato dd/mm/aaaa.
	 *
	 * @var string
	 */
	public string $dDtIncAte;
	/**
	 * Data de alteração inicial.<BR>No formato dd/mm/aaaa.
	 *
	 * @var string
	 */
	public string $dDtAltDe;
	/**
	 * Data de alteração final.<BR>No formato dd/mm/aaaa.
	 *
	 * @var string
	 */
	public string $dDtAltAte;
	/**
	 * ID do documento de acordo com a tabela especificada.<BR><BR>Por exemplo:<BR>Caso você informe "cliente" na tag "cTabela" você deve informar o ID do cliente neste campo.<BR><BR>Preenchimento obrigatório.
	 *
	 * @var integer
	 */
	public int $nId;
	/**
	 * Nome da tabela onde o anexo está incluído.<BR><BR>Pode ser: <BR>cliente<BR>produto<BR>servico<BR>pedido-venda<BR>remessa-produto<BR>ordem-servico<BR>contrato-servico<BR>pedido-compra<BR>nota-entrada<BR>ordem-producao<BR>conta-pagar<BR>conta-receber<BR>conta-corrente<BR>conta-corrente-lancamento<BR>crm-contas<BR>crm-contatos<BR>crm-oportunidades<BR>com-recebimento
	 *
	 * @var string
	 */
	public string $cTabela;
}
