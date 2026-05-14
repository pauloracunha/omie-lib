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
 * Resposta da solicitação do Status da Ordem de Serviço
 *
 * @pw_element string $cCodIntOS Código de Integração da OS
 * @pw_element integer $nCodOS Código da Ordem de Serviço
 * @pw_element string $cNumOS Número da Ordem de Serviço<BR>(Conforme visualizada em tela pelo cliente)<BR>
 * @pw_element string $cNumContrato Número do Contrato de Venda
 * @pw_element string $cNumRecibo Número do Recibo gerado.<BR>(Gerado automaticamente. Se informado na inclusão será ignorado).
 * @pw_element string $cNumPedido Número do Pedido do Cliente
 * @pw_element string $cEtapa Código da etapa do processo, sendo:<BR><BR>10 - Primeira coluna<BR>20 - Segunda coluna<BR>30 - Terceira coluna<BR>40 - Quarta coluna<BR>50 - Faturar
 * @pw_element string $cCancelada "S" para Ordem de Serviço cancelada.
 * @pw_element string $cFaturada "S" para Ordem de Serviço faturada com sucesso.
 * @pw_element string $cAmbiente Ambiente de emissão da NFS-e.<BR><BR>Pode ser:<BR><BR>H - Homologação<BR>P - Produção
 * @pw_element string $dDtInc Data de Inclusão da Ordem de Serviço
 * @pw_element string $cHrInc Hora de inclusão da Ordem de Serviço
 * @pw_element string $dDtAlt Data de Alteração da Ordem de Serviço
 * @pw_element string $cHrAlt Hora de Alteração da Ordem de Serviço
 * @pw_element string $dDtFat Data de Faturamento
 * @pw_element string $cHrFat Hora do Faturamento
 * @pw_element string $dDtCanc Data de Cancelamento
 * @pw_element string $cHrCanc Hora do Cancelamento
 * @pw_element decimal $nValorTot Valor total da Ordem de Serviço.<BR><BR>Não deve ser informado na inclusão ou alteração.<BR>Campo calculado automaticamente.
 * @pw_element string $cUrlPdfRecibo Link para obter o PDF do Recibo.
 * @pw_element ListaRpsNfseArray $ListaRpsNfse Lista de RPS geradas para a Ordem de Serviço
 * @pw_complex osStatusResponse
 */
class OsStatusResponse{
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
	 * Número da Ordem de Serviço<BR>(Conforme visualizada em tela pelo cliente)<BR>
	 *
	 * @var string
	 */
	public string $cNumOS;
	/**
	 * Número do Contrato de Venda
	 *
	 * @var string
	 */
	public string $cNumContrato;
	/**
	 * Número do Recibo gerado.<BR>(Gerado automaticamente. Se informado na inclusão será ignorado).
	 *
	 * @var string
	 */
	public string $cNumRecibo;
	/**
	 * Número do Pedido do Cliente
	 *
	 * @var string
	 */
	public string $cNumPedido;
	/**
	 * Código da etapa do processo, sendo:<BR><BR>10 - Primeira coluna<BR>20 - Segunda coluna<BR>30 - Terceira coluna<BR>40 - Quarta coluna<BR>50 - Faturar
	 *
	 * @var string
	 */
	public string $cEtapa;
	/**
	 * "S" para Ordem de Serviço cancelada.
	 *
	 * @var string
	 */
	public string $cCancelada;
	/**
	 * "S" para Ordem de Serviço faturada com sucesso.
	 *
	 * @var string
	 */
	public string $cFaturada;
	/**
	 * Ambiente de emissão da NFS-e.<BR><BR>Pode ser:<BR><BR>H - Homologação<BR>P - Produção
	 *
	 * @var string
	 */
	public string $cAmbiente;
	/**
	 * Data de Inclusão da Ordem de Serviço
	 *
	 * @var string
	 */
	public string $dDtInc;
	/**
	 * Hora de inclusão da Ordem de Serviço
	 *
	 * @var string
	 */
	public string $cHrInc;
	/**
	 * Data de Alteração da Ordem de Serviço
	 *
	 * @var string
	 */
	public string $dDtAlt;
	/**
	 * Hora de Alteração da Ordem de Serviço
	 *
	 * @var string
	 */
	public string $cHrAlt;
	/**
	 * Data de Faturamento
	 *
	 * @var string
	 */
	public string $dDtFat;
	/**
	 * Hora do Faturamento
	 *
	 * @var string
	 */
	public string $cHrFat;
	/**
	 * Data de Cancelamento
	 *
	 * @var string
	 */
	public string $dDtCanc;
	/**
	 * Hora do Cancelamento
	 *
	 * @var string
	 */
	public string $cHrCanc;
	/**
	 * Valor total da Ordem de Serviço.<BR><BR>Não deve ser informado na inclusão ou alteração.<BR>Campo calculado automaticamente.
	 *
	 * @var decimal
	 */
	public float $nValorTot;
	/**
	 * Link para obter o PDF do Recibo.
	 *
	 * @var string
	 */
	public string $cUrlPdfRecibo;
	/**
	 * Lista de RPS geradas para a Ordem de Serviço
	 *
	 * @var ListaRpsNfse[]
	 */
	public array $ListaRpsNfse;
}
