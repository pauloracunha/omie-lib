<?php

namespace OmieLib\Produtos\Recebimentonfe\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Recebimentonfe\Cabec;
use OmieLib\Produtos\Recebimentonfe\Categorias;
use OmieLib\Produtos\Recebimentonfe\CteCfopEntrada;
use OmieLib\Produtos\Recebimentonfe\Departamentos;
use OmieLib\Produtos\Recebimentonfe\Ide;
use OmieLib\Produtos\Recebimentonfe\InfoAdicionais;
use OmieLib\Produtos\Recebimentonfe\InfoCadastro;
use OmieLib\Produtos\Recebimentonfe\ItensAjustes;
use OmieLib\Produtos\Recebimentonfe\ItensAtualPreco;
use OmieLib\Produtos\Recebimentonfe\ItensCOFINS;
use OmieLib\Produtos\Recebimentonfe\ItensCabec;
use OmieLib\Produtos\Recebimentonfe\ItensCustoEstoque;
use OmieLib\Produtos\Recebimentonfe\ItensICMS;
use OmieLib\Produtos\Recebimentonfe\ItensICMSSN;
use OmieLib\Produtos\Recebimentonfe\ItensICMSST;
use OmieLib\Produtos\Recebimentonfe\ItensIPI;
use OmieLib\Produtos\Recebimentonfe\ItensIde;
use OmieLib\Produtos\Recebimentonfe\ItensInfoAdic;
use OmieLib\Produtos\Recebimentonfe\ItensInfoAdicEditar;
use OmieLib\Produtos\Recebimentonfe\ItensPIS;
use OmieLib\Produtos\Recebimentonfe\ItensRecebimento;
use OmieLib\Produtos\Recebimentonfe\ItensRecebimentoEditar;
use OmieLib\Produtos\Recebimentonfe\ItensSitTribEnt;
use OmieLib\Produtos\Recebimentonfe\ItensSitTribICMSSTEnt;
use OmieLib\Produtos\Recebimentonfe\Lote_validade;
use OmieLib\Produtos\Recebimentonfe\Observacoes;
use OmieLib\Produtos\Recebimentonfe\Parcelas;
use OmieLib\Produtos\Recebimentonfe\ParcelasEditar;
use OmieLib\Produtos\Recebimentonfe\ParcelasLista;
use OmieLib\Produtos\Recebimentonfe\ParcelasListaEditar;
use OmieLib\Produtos\Recebimentonfe\RecebimentoNFeJsonClient;
use OmieLib\Produtos\Recebimentonfe\Recebimentos;
use OmieLib\Produtos\Recebimentonfe\Response\RcbtoAlterarEtapaResponse;
use OmieLib\Produtos\Recebimentonfe\Response\RcbtoAlterarResponse;
use OmieLib\Produtos\Recebimentonfe\Response\RcbtoConcAlterarResponse;
use OmieLib\Produtos\Recebimentonfe\Response\RcbtoConcluirResponse;
use OmieLib\Produtos\Recebimentonfe\Response\RcbtoConsultarResponse;
use OmieLib\Produtos\Recebimentonfe\Response\RcbtoExcluirResponse;
use OmieLib\Produtos\Recebimentonfe\Response\RcbtoListarResponse;
use OmieLib\Produtos\Recebimentonfe\Response\RcbtoReverterResponse;
use OmieLib\Produtos\Recebimentonfe\Totais;
use OmieLib\Produtos\Recebimentonfe\Transporte;

/**
 * Solicitação de listagem da nota de recebimento
 *
 * @pw_element integer $nPagina Número da página que será listada.
 * @pw_element integer $nRegistrosPorPagina Número de registros retornados
 * @pw_element string $cOrdenarPor Ordenar o resultado da página por:<BR><BR>CODIGO - Id do recebimento;<BR>CHAVE - Chave de acesso da NF-e.
 * @pw_element string $dtAltDe Filtra os registros a partir da data específicada.
 * @pw_element string $dtAltAte Filtra os registros até a data específicada.
 * @pw_element string $hrAltDe Filtra os registros a partir da hora específicada.
 * @pw_element string $hrAltAte Filtra os registros até a hora específicada.
 * @pw_element string $dtEmissaoDe Filtra os registros a partir da data de emissão específicada.
 * @pw_element string $dtEmissaoAte Filtra os registros até a data de emissão específicada.
 * @pw_element integer $nIdFornecedor Filtra os registros do fornecedor específicado.
 * @pw_element string $cEtapa Filtra os registros da etapa específicada.
 * @pw_element string $cExibirDetalhes Exibir os detalhes da nota de recebimento.<BR><BR>Preencher com "S" ou "N".
 * @pw_complex rcbtoListarRequest
 */
class RcbtoListarRequest{
	/**
	 * Número da página que será listada.
	 *
	 * @var integer
	 */
	public int $nPagina;
	/**
	 * Número de registros retornados
	 *
	 * @var integer
	 */
	public int $nRegistrosPorPagina;
	/**
	 * Ordenar o resultado da página por:<BR><BR>CODIGO - Id do recebimento;<BR>CHAVE - Chave de acesso da NF-e.
	 *
	 * @var string
	 */
	public string $cOrdenarPor;
	/**
	 * Filtra os registros a partir da data específicada.
	 *
	 * @var string
	 */
	public string $dtAltDe;
	/**
	 * Filtra os registros até a data específicada.
	 *
	 * @var string
	 */
	public string $dtAltAte;
	/**
	 * Filtra os registros a partir da hora específicada.
	 *
	 * @var string
	 */
	public string $hrAltDe;
	/**
	 * Filtra os registros até a hora específicada.
	 *
	 * @var string
	 */
	public string $hrAltAte;
	/**
	 * Filtra os registros a partir da data de emissão específicada.
	 *
	 * @var string
	 */
	public string $dtEmissaoDe;
	/**
	 * Filtra os registros até a data de emissão específicada.
	 *
	 * @var string
	 */
	public string $dtEmissaoAte;
	/**
	 * Filtra os registros do fornecedor específicado.
	 *
	 * @var integer
	 */
	public int $nIdFornecedor;
	/**
	 * Filtra os registros da etapa específicada.
	 *
	 * @var string
	 */
	public string $cEtapa;
	/**
	 * Exibir os detalhes da nota de recebimento.<BR><BR>Preencher com "S" ou "N".
	 *
	 * @var string
	 */
	public string $cExibirDetalhes;
}
