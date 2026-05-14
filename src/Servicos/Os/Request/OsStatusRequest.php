<?php

namespace OmieLib\Servicos\Os\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Os\Cabecalho;
use OmieLib\Servicos\Os\DeducoesIss;
use OmieLib\Servicos\Os\Departamentos;
use OmieLib\Servicos\Os\DespesaReembolsavel;
use OmieLib\Servicos\Os\DespesasReembolsaveis;
use OmieLib\Servicos\Os\DetalhesNfse;
use OmieLib\Servicos\Os\Email;
use OmieLib\Servicos\Os\Eventos;
use OmieLib\Servicos\Os\Filtrar_por_codigo;
use OmieLib\Servicos\Os\Impostos;
use OmieLib\Servicos\Os\InfoCadastro;
use OmieLib\Servicos\Os\InformacoesAdicionais;
use OmieLib\Servicos\Os\ListaOS;
use OmieLib\Servicos\Os\ListaRpsNfse;
use OmieLib\Servicos\Os\Lote_validade;
use OmieLib\Servicos\Os\Mensagens;
use OmieLib\Servicos\Os\Observacoes;
use OmieLib\Servicos\Os\OrdemServicoJsonClient;
use OmieLib\Servicos\Os\OsCadastro;
use OmieLib\Servicos\Os\OsChave;
use OmieLib\Servicos\Os\OsStatus;
use OmieLib\Servicos\Os\Parcelas;
use OmieLib\Servicos\Os\ProdutoUtilizado;
use OmieLib\Servicos\Os\ProdutosUtilizados;
use OmieLib\Servicos\Os\Response\OsListarResponse;
use OmieLib\Servicos\Os\Response\OsObterResponse;
use OmieLib\Servicos\Os\Response\OsStatusResponse;
use OmieLib\Servicos\Os\Response\OsTrocarEtapaResponse;
use OmieLib\Servicos\Os\ServicosPrestados;
use OmieLib\Servicos\Os\Tarefas;
use OmieLib\Servicos\Os\ViaUnica;

/**
 * Solicitação de Status da Ordem de Serviço
 *
 * @pw_element string $cCodIntOS Código de Integração da OS
 * @pw_element integer $nCodOS Código da Ordem de Serviço
 * @pw_element boolean $lPdfDemo Exibir a Url do PDF do Demonstrativo da NFS-e.<BR><BR>Pode ser:<BR>true<BR>false<BR><BR>O padrão é false.<BR><BR>Preenchimento opcional.
 * @pw_element boolean $lPdfDest Exibir a Url do PDF do Destinatário da NFS-e.<BR><BR>Pode ser:<BR>true<BR>false<BR><BR>O padrão é false.<BR><BR>Preenchimento opcional.
 * @pw_element boolean $lRps Exibir a Url da RPS.<BR><BR>Pode ser:<BR>true<BR>false<BR><BR>O padrão é false.<BR><BR>Preenchimento opcional.
 * @pw_element boolean $lPdfRecibo Exibir a Url do Recibo.<BR><BR>Pode ser:<BR>true<BR>false<BR><BR>O padrão é false.<BR><BR>Preenchimento opcional.
 * @pw_element boolean $lMsg Retornar todas mensagens de comunicação com a prefeitura (S/N).<BR><BR>Quando preenchido com "N" ou não preenchido, vamos devolver apenas as mensagens com erro.<BR>Quando preenchido com "S", vamos devolver todas as mensagens de comunicação com a prefeitura.<BR><BR>O padrão é "N".<BR><BR>Preenchimento opcional.
 * @pw_complex osStatusRequest
 */
class OsStatusRequest{
	/**
	 * Código de Integração da OS
	 *
	 * @var string
	 */
	public string $cCodIntOS;
	/**
	 * Código da Ordem de Serviço
	 *
	 * @var integer
	 */
	public int $nCodOS;
	/**
	 * Exibir a Url do PDF do Demonstrativo da NFS-e.<BR><BR>Pode ser:<BR>true<BR>false<BR><BR>O padrão é false.<BR><BR>Preenchimento opcional.
	 *
	 * @var boolean
	 */
	public bool $lPdfDemo;
	/**
	 * Exibir a Url do PDF do Destinatário da NFS-e.<BR><BR>Pode ser:<BR>true<BR>false<BR><BR>O padrão é false.<BR><BR>Preenchimento opcional.
	 *
	 * @var boolean
	 */
	public bool $lPdfDest;
	/**
	 * Exibir a Url da RPS.<BR><BR>Pode ser:<BR>true<BR>false<BR><BR>O padrão é false.<BR><BR>Preenchimento opcional.
	 *
	 * @var boolean
	 */
	public bool $lRps;
	/**
	 * Exibir a Url do Recibo.<BR><BR>Pode ser:<BR>true<BR>false<BR><BR>O padrão é false.<BR><BR>Preenchimento opcional.
	 *
	 * @var boolean
	 */
	public bool $lPdfRecibo;
	/**
	 * Retornar todas mensagens de comunicação com a prefeitura (S/N).<BR><BR>Quando preenchido com "N" ou não preenchido, vamos devolver apenas as mensagens com erro.<BR>Quando preenchido com "S", vamos devolver todas as mensagens de comunicação com a prefeitura.<BR><BR>O padrão é "N".<BR><BR>Preenchimento opcional.
	 *
	 * @var boolean
	 */
	public bool $lMsg;
}
