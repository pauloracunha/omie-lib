<?php

namespace OmieLib\Servicos\Contrato\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Contrato\Cabecalho;
use OmieLib\Servicos\Contrato\ContratoCadastro;
use OmieLib\Servicos\Contrato\ContratoChave;
use OmieLib\Servicos\Contrato\ContratoJsonClient;
use OmieLib\Servicos\Contrato\CsStatus;
use OmieLib\Servicos\Contrato\Departamentos;
use OmieLib\Servicos\Contrato\DespesaReembolsavel;
use OmieLib\Servicos\Contrato\DespesasReembolsaveis;
use OmieLib\Servicos\Contrato\EmailCliente;
use OmieLib\Servicos\Contrato\InfAdic;
use OmieLib\Servicos\Contrato\InfoCadastro;
use OmieLib\Servicos\Contrato\ItemCabecalho;
use OmieLib\Servicos\Contrato\ItemDescrServ;
use OmieLib\Servicos\Contrato\ItemImpostos;
use OmieLib\Servicos\Contrato\ItemLeiTranspImp;
use OmieLib\Servicos\Contrato\ItemOutrasInf;
use OmieLib\Servicos\Contrato\ItemViaUnica;
use OmieLib\Servicos\Contrato\ItensContrato;
use OmieLib\Servicos\Contrato\ItensExclusao;
use OmieLib\Servicos\Contrato\Lote_validade;
use OmieLib\Servicos\Contrato\Observacoes;
use OmieLib\Servicos\Contrato\ProdutoUtilizado;
use OmieLib\Servicos\Contrato\ProdutosUtilizados;
use OmieLib\Servicos\Contrato\Response\CsConsultarResponse;
use OmieLib\Servicos\Contrato\Response\CsExcluirItemResponse;
use OmieLib\Servicos\Contrato\Response\CsListarResponse;
use OmieLib\Servicos\Contrato\VencTextos;

/**
 * Solicitação da Consulta de Contrato de Serviço
 *
 * @pw_element contratoChave $contratoChave Chave de Pesquisa do Contrato de Serviço.
 * @pw_complex csConsultarRequest
 */
class CsConsultarRequest{
	/**
	 * Chave de Pesquisa do Contrato de Serviço.
	 *
	 * @var ContratoChave
	 */
	public ContratoChave $contratoChave;
}
