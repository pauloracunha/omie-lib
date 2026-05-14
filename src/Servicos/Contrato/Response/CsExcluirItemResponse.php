<?php

namespace OmieLib\Servicos\Contrato\Response;

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
use OmieLib\Servicos\Contrato\Request\CsConsultarRequest;
use OmieLib\Servicos\Contrato\Request\CsExcluirItemRequest;
use OmieLib\Servicos\Contrato\Request\CsListarRequest;
use OmieLib\Servicos\Contrato\VencTextos;

/**
 * Resposta da solicitação de cancelamento de itens do contrato de serviços.
 *
 * @pw_element string $cCodIntCtr Código de integração do contrato de serviços.<BR>(Utilizado em contratos criados via API, não é visualizado na tela)
 * @pw_element integer $nCodCtr Código do contrato de serviços.<BR>(Gerado internamente, não é visualizado na tela)
 * @pw_element string $cCodStatus Código do Status
 * @pw_element string $cDescStatus Descrição do Status
 * @pw_complex csExcluirItemResponse
 */
class CsExcluirItemResponse{
	/**
	 * Código de integração do contrato de serviços.<BR>(Utilizado em contratos criados via API, não é visualizado na tela)
	 *
	 * @var string
	 */
	public string $cCodIntCtr;
	/**
	 * Código do contrato de serviços.<BR>(Gerado internamente, não é visualizado na tela)
	 *
	 * @var integer
	 */
	public int $nCodCtr;
	/**
	 * Código do Status
	 *
	 * @var string
	 */
	public string $cCodStatus;
	/**
	 * Descrição do Status
	 *
	 * @var string
	 */
	public string $cDescStatus;
}
