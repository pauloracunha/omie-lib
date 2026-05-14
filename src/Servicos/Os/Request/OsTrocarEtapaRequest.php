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
 * Solicitação de troca de etapa da Ordem de Serviço.
 *
 * @pw_element integer $nCodOS Código da Ordem de Serviço
 * @pw_element string $cCodIntOS Código de Integração da OS
 * @pw_element string $cNumOS Número da Ordem de Serviço<BR>(Conforme visualizada em tela pelo cliente)<BR>
 * @pw_element string $cEtapa Código da etapa do processo, sendo:<BR><BR>10 - Primeira coluna<BR>20 - Segunda coluna<BR>30 - Terceira coluna<BR>40 - Quarta coluna<BR>50 - Faturar
 * @pw_complex osTrocarEtapaRequest
 */
class OsTrocarEtapaRequest{
	/**
	 * Código da Ordem de Serviço
	 *
	 * @var integer
	 */
	public int $nCodOS;
	/**
	 * Código de Integração da OS
	 *
	 * @var string
	 */
	public string $cCodIntOS;
	/**
	 * Número da Ordem de Serviço<BR>(Conforme visualizada em tela pelo cliente)<BR>
	 *
	 * @var string
	 */
	public string $cNumOS;
	/**
	 * Código da etapa do processo, sendo:<BR><BR>10 - Primeira coluna<BR>20 - Segunda coluna<BR>30 - Terceira coluna<BR>40 - Quarta coluna<BR>50 - Faturar
	 *
	 * @var string
	 */
	public string $cEtapa;
}
