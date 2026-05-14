<?php

namespace OmieLib\Servicos\Os\Response;

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
use OmieLib\Servicos\Os\Request\OsListarRequest;
use OmieLib\Servicos\Os\Request\OsObterRequest;
use OmieLib\Servicos\Os\Request\OsStatusRequest;
use OmieLib\Servicos\Os\Request\OsTrocarEtapaRequest;
use OmieLib\Servicos\Os\ServicosPrestados;
use OmieLib\Servicos\Os\Tarefas;
use OmieLib\Servicos\Os\ViaUnica;

/**
 * Resposta da solicitação da lista de Ordens de Serviço de uma etapa.
 *
 * @pw_element string $cEtapa Código da etapa do processo, sendo:<BR><BR>10 - Primeira coluna<BR>20 - Segunda coluna<BR>30 - Terceira coluna<BR>40 - Quarta coluna<BR>50 - Faturar
 * @pw_element listaOSArray $listaOS Lista de Ordens de Serviço de uma etapa.
 * @pw_complex osObterResponse
 */
class OsObterResponse{
	/**
	 * Código da etapa do processo, sendo:<BR><BR>10 - Primeira coluna<BR>20 - Segunda coluna<BR>30 - Terceira coluna<BR>40 - Quarta coluna<BR>50 - Faturar
	 *
	 * @var string
	 */
	public string $cEtapa;
	/**
	 * Lista de Ordens de Serviço de uma etapa.
	 *
	 * @var ListaOS[]
	 */
	public array $listaOS;
}
